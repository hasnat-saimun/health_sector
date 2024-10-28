<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicineController extends Controller
{
    public function midicineView(){
        return view('medicine.medicinePage');
    }
}
