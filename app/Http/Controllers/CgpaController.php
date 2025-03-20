<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\StudentInfo;

class CgpaController extends Controller
{
    public function showCGPA(){

        return view('education/cgpa');
        // return view('education/cgpa', compact());
    }

    public function storeCGPA(Request $request){

    }
}
