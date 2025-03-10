<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UBD\Modules;
use App\Models\Student\ModulesTaken;
use App\Models\Profile;

class ModuleController extends Controller
{
    public function showModules()
    {
        $records = ModulesTaken::with('module')
        ->where('student_id', Auth::user()->asg_username)
        ->get();

        $mcBreakdown = $records->filter(function ($record) {
            return $record->status === true && $record->grade !== null;
        })
        ->groupBy('assigned_md_type')
        ->map(function ($group) {
            return $group->sum('module.mc');
        });

        return view('moduleTracker', compact('records', 'mcBreakdown'));
    }

    public function addModule(Request $request)
    {
        // Validate the input
        $request->validate([
            'module_id' => 'required|string',
            // 'taken_module_name' => 'nullable|string',
            'module_type' => 'required|in:DC,MC,MO,"CB","Other Breadth"',
            'status' => 'nullable|in:0,1',
            'grade' => 'nullable|string',
        ]);

        // Check if module name is provided, otherwise fetch from database
        $moduleName = $request->input('taken_module_name');

        if (!$moduleName) {
            $module = Modules::where('module_id', $request->input('module_id'))->first();
            $moduleName = $module ? $module->name : null; // Get name if found, otherwise null
        }

        // Create the module entry
        ModulesTaken::create([
            'module_id' => $request->input('module_id'),
            'student_id' => Auth::user()->asg_username,
            'assigned_md_type' => $request->input('module_type'),
    
            'grade' => $request->input('grade'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Module added successfully!');
    }

    public function getModuleName($module_id)
    {
        $module = Modules::where('module_id', $module_id)->first();

        if (!$module) {
            return response()->json(['module_name' => 'N/A']);  // Return 'N/A' if module not found
        }

        return response()->json([
            'module_name' => $module->module_name  // Assuming 'module_name' is the correct attribute name
        ]);
    }

    // public function goHome(){
    //     return redirect('/home');
    // }

}