<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Movie;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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

        $movie= Movie::where('title',$name)->first();
        return view('frontend.movie.single-movie',compact('movie'));

    }
}
