<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_landingpage extends Controller
{
    public function landingpage(){
        return view('V_landingpage');
    }
}
