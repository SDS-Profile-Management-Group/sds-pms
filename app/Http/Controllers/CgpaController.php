<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Info\Student;

class CgpaController extends Controller
{
    public function showCGPA(){
        $userId = Auth::user()->asg_username;
        $student = Student::where('student_username', $userId)->first();

        if (!$student || !$student->cgpa) {
            $cgpaData = [];
        } else {
            $cgpaData = json_decode($student->cgpa, true); // Assuming 'cgpa' column stores JSON data
        }

        return view('education/cgpa', compact('cgpaData'));
    }

    public function storeCGPA(Request $request){
        $userID = Auth::user()->asg_username;
        $student = Student::where('student_username', $userID)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Decode existing CGPA data or initialize an empty array
        $cgpaData = $student->cgpa ? json_decode($student->cgpa, true) : [];

        // Update the CGPA data with the new entry
        $cgpaData[$request->semester] = number_format((float) $request->cgpa_obt, 2, '.', '');

        // Save back to database
        $student->cgpa = json_encode($cgpaData);
        $student->save();

        return redirect()->back()->with('success', 'CGPA record added successfully.');
    }
}
