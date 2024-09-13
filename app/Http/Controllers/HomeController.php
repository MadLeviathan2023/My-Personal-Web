<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }

    public function about(){
        return view('home.about');
    }

    public function projects(){
        return view('home.projects');
    }

    public function contact(){
        return view('home.contact');
    }
}
