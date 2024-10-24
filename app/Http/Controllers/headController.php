<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headController extends Controller
{
    
    public function nav(){
        return view('nav&fotter');
    }
}
