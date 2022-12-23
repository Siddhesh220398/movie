<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $data['title']='Hom Page';
        return view('frontend.front-main',compact('data'));
    }
}
