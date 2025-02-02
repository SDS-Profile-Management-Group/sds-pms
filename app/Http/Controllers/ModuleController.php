<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Modules;
use App\Models\Profile;
use App\Models\ModulesTaken;

class ModuleController extends Controller
{
    public function redirectMCT(){
        return view('moduleTracker');
    }

    public function showModules(){
        $records = ModulesTaken::where('student_id', Auth::user()->asg_username)->get();
        return view('moduleTracker', compact('records'));
    }

    public function addModule(Request $request){
        // Validate the input
        $request->validate([
            'module_id' => 'required|string',
            'module_type' => 'required|in:DC,MC,MO,Breadth',
            'status' => 'nullable|string',
            'semester' => 'nullable|string',
        ]);

        // Create the module
        ModulesTaken::create([
            'module_id' => $request->input('module_id'),
            'student_id' => Auth::user()->asg_username,  // Assuming logged-in user's username is used
            'module_type' => $request->input('module_type'),
            'status' => $request->input('status'),
            'semester' => $request->input('semester'),
        ]);

        return redirect()->back()->with('success', 'Module added successfully!');
    }

}