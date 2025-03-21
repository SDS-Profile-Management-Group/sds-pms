<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\StudentInfo;

class CgpaController extends Controller
{
    public function showCGPA(){
        $userId = Auth::user()->asg_username;
        $student = StudentInfo::where('student_username', $userId)->first();

        if (!$student || !$student->cgpa) {
            $cgpaData = [];
        } else {
            $cgpaData = json_decode($student->cgpa, true); // Assuming 'cgpa' column stores JSON data
        }

        return view('education/cgpa', compact('cgpaData'));
    }

    public function storeCGPA(Request $request){

    }
}
