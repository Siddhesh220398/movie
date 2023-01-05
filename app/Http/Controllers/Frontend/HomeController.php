<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Episode;
use App\Model\Movie;
use App\Model\MovieComments;
use App\Model\MovieRates;
use App\Model\Season;
use App\Model\WatchList;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use phpDocumentor\Reflection\Types\Null_;

class HomeController extends Controller
{
    public function home(){
        $data['title']='Home Page';
        $data['trending_movie']= Movie::where(['type'=>'movies','latest'=>1])->with('movieGenre','watchListByUser')->limit(20)->get();
        $data['trending_web']= Movie::where(['type'=>'web-series','latest'=>1])->with('movieGenre','watchListByUser')->limit(20)->get();
        $data['latest']= Movie::latest()->with('movieGenre','watchListByUser')->limit(20)->get();
        return view('frontend.front-main',compact('data'));
    }

    public function login(){
        $data['title']='Login';
        return view('frontend.auth.login',compact('data'));

    }
    public function register(){
        $data['title']='Register';
        return view('frontend.auth.register',compact('data'));

    }

    public function profile(){
        $data['title']='My Profile';
        $user['user']= Auth::user();
        return view('frontend.auth.profile',compact('data','user'));
    }
    public function updateProfile(Request $request ){
        $user= Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back();
    }


    public function movieList(Request $request)
    {
        $movies = Movie::orderBy('id','desc')->with('movieGenre','watchListByUser');
        $genre_id=[];
        $country_id=[];
        $year_id=[];
        $type=[];
        $featured="";
        if($request->has('genre_id')){
            $genre_id=$request->genre_id;
            $movies = $movies->whereHas('movieGenre', function ($q) use ($request) {
                $q->whereIn('genre_id', $request->genre_id);
            });
        }
        if($request->has('search')){
            $movies = $movies->where('title','Like','%'.$request->search .'%');
        }

        if($request->has('country_id')){
            $country_id=$request->country_id;
            $movies = $movies->orWhereIn('country_id', $request->country_id);
        }

        if($request->has('type')){
            $type=$request->type;

            $movies = $movies->orWhereIn('type', $request->type);
        }
        if($request->has('year_id')){
            $year_id=$request->year_id;

            $movies = $movies->orWhereIn('year', $request->year_id);
        }
        if($request->has('featured')){
            $featured=$request->featured;

            if($request->featured == "topimdb"){
                $movies = $movies->orderBy('imdb_rates','desc');
            }elseif ($request->featured == "featured"){
                $movies = $movies->where('latest',1);
            }
        }

        $movies=$movies->paginate(20);
        return view('frontend.movie.index',compact('movies','genre_id','country_id','type','featured','year_id'));
    }

    public function singleMovie(Request $request,$type,$name){

        $movie= Movie::where('title',$name)->with('movieGenre','movieGenre.genre','movieComments','movieComments.subComments','movieRates','movieRateDisLikes','seasons')->first();
        return view('frontend.movie.single-movie',compact('movie'));

    }
    public function play(Request $request,$type,$name){

        $movie= Movie::where('title',$name)->with('movieGenre','movieGenre.genre','movieComments','movieComments.subComments','movieRates','movieRateDisLikes','seasons')->first();

        return view('frontend.movie.watch-movie',compact('movie'));

    }
    public function singleSeason(Request $request,$type,$name,$season){

        $season= Season::where('id',$season)->with('episodes','movie','movie.movieGenre')->first();
        return view('frontend.movie.single-season',compact('season'));

    }

    public function comments(Request $request){
        if(!Auth::user()){
            return response()->json(['status'=>'unauthenticate','message'=>'Commented']);
        }
        MovieComments::create(['movie_id'=>$request->movie_id,'user_id'=>Auth::user()->id,'comment_id'=>$request->has('comment_id') ? $request->comment_id : Null,'comments'=>$request->comment]);
        return response()->json(['status'=>'success','message'=>'Commented']);
    }
    public function like(Request $request){
        if(!Auth::user()){
            return response()->json(['status'=>'unauthenticate','message'=>'Commented']);
        }
        MovieRates::updateOrCreate(['movie_id'=>$request->id,'user_id'=>Auth::user()->id],['movie_id'=>$request->id,'user_id'=>Auth::user()->id,'like'=>$request->type == 'like' ? 1 : 0]);
        return response()->json(['status'=>'success','message'=>'Commented']);
    }

    public function episode(Request $request){
        $episode= Episode::where('id',$request->id)->first();
        if($episode){
            return response()->json(['status'=>'success','message'=>'Commented','episode'=>$episode,'renderData'=>view('frontend.movie.episode')->with('url', $episode->url)->render()]);
        }else{
            return response()->json(['status'=>'error','message'=>'Commented',]);
        }
    }

    public function watchlist()
    {
        $data['movies']= WatchList::where('user_id',Auth::user()->id)->with('movies','movies.posters','movies.movieGenre')->get();

        return view('frontend.watchlist.index',compact('data'));
    }

    public function watchlistStore(Request $request)
    {
        if($request->type != "remove") {
            WatchList::updateOrCreate(['movie_id'=>$request->id,'user_id'=>Auth::user()->id],['movie_id'=>$request->id,'user_id'=>Auth::user()->id]);
        }else{
            WatchList::where(['movie_id'=>$request->id,'user_id'=>Auth::user()->id])->delete();
        }
        return response()->json(['status'=>'success','message'=>'Commented']);
    }
}
