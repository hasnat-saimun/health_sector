<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headController extends Controller
{
    
    public function home(){
        return view('mainFolder.homePage');
    }
    public function nav(){
        return view('nav&fotter');
    }
}
