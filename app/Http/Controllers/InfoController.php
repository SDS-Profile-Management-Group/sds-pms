<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Models\
use App\Models\Profile;
use App\Models\StudentInfo;
use App\Models\Info\Staff;
use App\Models\Education\Major;

class InfoController extends Controller
{
    public function showMajorInfo(){
        $majorId = Major::where('leading_staff', Auth::user()->asg_username)->value('major_id');

        $studentRecords = StudentInfo::with(['user', 'major'])
            ->where('major_id', $majorId)
            ->get();

        $staffRecords = Staff::with(['user', 'leadingMajor'])
        ->whereHas('leadingMajor', function ($query) use ($majorId) { 
            $query->where('major_id', $majorId); // Filter by major_id in sds_major table
        })
        ->get();

        return view('academic/major_info', compact('studentRecords', 'staffRecords'));
    }

    // public function showMajorInfo(){
    //     return view('academic/major_info');
    // }
}
