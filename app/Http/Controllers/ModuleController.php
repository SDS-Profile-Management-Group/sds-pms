<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\Profile;

class ModuleController extends Controller
{
    public function saveModules(Request $request){
        
    }

    public function redirectMCT(){
        return view('moduleTracker');
    }

    public function showModules(){
        $records = ModulesTaken::where('student_id', Auth::user()->asg_username)->get();
        return view('module-tracker', compact('records'));
    }
}
