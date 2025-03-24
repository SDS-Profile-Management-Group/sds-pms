<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showMajorInfo(){
        return view('academic/major_info');
    }
}
