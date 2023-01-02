<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Movie;
use App\Model\MovieComments;
use App\Model\MovieRates;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use phpDocumentor\Reflection\Types\Null_;

class HomeController extends Controller
{
    public function home(){
        $data['title']='Home Page';
        $data['trending_movie']= Movie::where(['type'=>'movies','latest'=>1])->limit(20)->get();
        $data['trending_web']= Movie::where(['type'=>'web-series','latest'=>1])->limit(20)->get();
        $data['latest']= Movie::latest()->limit(20)->get();
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


    public function movieList($name)
    {
        return view('frontend.movie.index');
    }

    public function singleMovie(Request $request,$type,$name){

        $movie= Movie::where('title',$name)->with('movieGenre','movieGenre.genre','movieComments','movieComments.subComments','movieRates','movieRateDisLikes')->first();
        return view('frontend.movie.single-movie',compact('movie'));

    }

    public function comments(Request $request){
        MovieComments::create(['movie_id'=>$request->movie_id,'user_id'=>Auth::user()->id,'comment_id'=>$request->has('comment_id') ? $request->comment_id : Null,'comments'=>$request->comment]);
        return response()->json(['status'=>'success','message'=>'Commented']);
    }
    public function like(Request $request){
        MovieRates::updateOrCreate(['movie_id'=>$request->id,'user_id'=>Auth::user()->id],['movie_id'=>$request->id,'user_id'=>Auth::user()->id,'like'=>$request->type == 'like' ? 1 : 0]);
        return response()->json(['status'=>'success','message'=>'Commented']);
    }
}
