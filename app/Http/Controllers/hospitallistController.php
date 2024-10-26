<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hospitallistController extends Controller
{
    public function listPage(){
        return view('hospital.hospitalList');
    }
}
