<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UBD\Modules;
use App\Models\Student\ModulesTaken;
use App\Models\Profile;

class ModuleController extends Controller
{
    // public function showModules()
    // {
    //     $records = ModulesTaken::with('module')
    //         ->where('student_id', Auth::user()->asg_username)
    //         ->get();

    //     return view('moduleTracker', compact('records'));
    // }

    public function showModules()
    {
        $records = ModulesTaken::with('module')
            ->where('student_id', Auth::user()->asg_username)
            ->get();

        // Tally levels
        $levelCounts = $records->groupBy(function ($record) {
            preg_match('/-(\d)/', $record->module_id, $matches);
            return isset($matches[1]) ? ($matches[1] * 1000) : 'Unknown';
        })->map->count();

        $filteredLevelCounts = $levelCounts->only([1000, 4000]);

        // Define remarks
        $remarks = [
            1000 => ($filteredLevelCounts->get(1000, 0) > 10) 
                ? 'You exceed the maximum requirement!' 
                : 'You can take ' . (10 - $filteredLevelCounts->get(1000, 0)) . ' more module(s)',
            4000 => ($filteredLevelCounts->get(4000, 0) < 4) 
                ? 'You need to take '. (4 - $filteredLevelCounts->get(4000, 0)). ' more module(s)!' 
                : 'You have met the minimum requirement',
        ];

        return view('moduleTracker', compact('records', 'filteredLevelCounts', 'remarks'));
    }

    public function addModule(Request $request)
    {
        // Validate the input
        $request->validate([
            'module_id' => 'required|string',
            // 'taken_module_name' => 'nullable|string',
            'module_type' => 'required|in:DC,MC,MO,"Compulsory Breadth","Other Breadth"',
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
            // 'taken_module_name' => $moduleName, // Store the fetched or user-inputted name
            'grade' => $request->input('grade'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Module added successfully!');
    }

    public function getModuleName($module_id)
    {
        $module = Modules::where('module_id', $module_id)->first();

        return response()->json([
            'module_name' => $module ? $module->name : null
        ]);
    }

}