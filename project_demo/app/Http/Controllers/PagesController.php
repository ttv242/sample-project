<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('layouts.public.home');
    }
    // public function home(){
    //     return view('layouts.public.home');
    // }
    public function about(){
        return view('layouts.public.about');
    }
    public function blog(){
        return view('layouts.public.blog');
    }
    public function contact(){
        return view('layouts.public.contact');
    }
    public function login(){
        return view('layouts.public.login');
    }
    public function register(){
        return view('layouts.public.register');
    }
}
