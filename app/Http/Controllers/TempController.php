<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function home(){
        return view('index');
    }
    public function adminProfile(){
        return view('adminprofile');
    }
    public function normal(){
        return view('normal');
    }
    
}
