<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cardformController extends Controller
{
    public function formView(){
        return view('cardPage.cardForm');
    }
}
