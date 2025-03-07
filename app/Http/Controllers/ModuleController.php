<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UBD\Modules;
use App\Models\Student\ModulesTaken;
use App\Models\Profile;

class ModuleController extends Controller
{
    public function showModules(){
        $records = ModulesTaken::with('module')->where('student_id', Auth::user()->asg_username)->get();
        return view('moduleTracker', compact('records'));
        // // Separate records by module type

        // $dcRecords = $records->where('module_type', 'DC');
        // $mcRecords = $records->where('module_type', 'MC');
        // $breadthRecords = $records->where('module_type', 'Breadth');
        // $moRecords = $records->where('module_type', 'MO');

        // return view('moduleTracker', compact('dcRecords', 'mcRecords', 'breadthRecords', 'moRecords'));
    }

    public function addModule(Request $request){
        // Validate the input
        $request->validate([
            'module_id' => 'required|string',
            'module_type' => 'required|in:DC,MC,MO,"Compulsory Breadth","Other Breadth"',
            'status' => 'nullable|boolean',
            'grade' => 'nullable|string',
        ]);

        // Create the module
        ModulesTaken::create([
            'module_id' => $request->input('module_id'),
            'student_id' => Auth::user()->asg_username,  // Assuming logged-in user's username is used
            
            'assigned_md_type' => $request->input('module_type'),
            'grade' => $request->input('grade'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Module added successfully!');
    }

}