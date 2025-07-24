<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __invoke()
    {
        return view('home', ['name' => 'kawish zia']);
    }

    public function about(){
        return view('about');
    }
    public function icecream(){
        return view('creame');
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }
    public function service(){
        return view('service');
    }
}
