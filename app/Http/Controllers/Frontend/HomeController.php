<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $data['title']='Home Page';

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

    public function movieList($name)
    {
        return view('frontend.movie.index');
    }
}
