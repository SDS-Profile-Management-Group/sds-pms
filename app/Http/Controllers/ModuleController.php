<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UBD\Modules;
use App\Models\UBD\ModuleBelongsTo;
use App\Models\Student\ModulesTaken;
use App\Models\Profile;
use App\Models\StudentInfo;

class ModuleController extends Controller
{
    public function showModules(){
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

    public function getModuleName($module_id){
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

    public function store(Request $request){
        $request->validate([
            'module_id' => 'required|string',
            'status' => 'nullable|in:0,1',
            'grade' => 'nullable|string',
        ]);

        $student = StudentInfo::where('student_username', auth()->user()->asg_username)->first();
        $module = ModuleBelongsTo::where('module_id', $request->module_id)->first();
        if (!$module) {            
            ModulesTaken::create([
                'module_id' => $request->module_id,
                'student_id' => $student->student_username,
                'status' => $request->status,
                'grade' => $request->grade,
                'assigned_md_type' => 'OB',
            ]);
        } else {
            $originalType = $module->module_type; 
            $participatingMajors = json_decode($module->all_participating_majors, true); 

            if (is_array($participatingMajors) && in_array($student->major_id, $participatingMajors)) {
                $moduleInArray = true;
            } else {
                $moduleInArray = false;
            }

            switch($originalType){
                case 'MC':
                    if ($moduleInArray){
                        $assignedMdType = 'MC';
                    }else{
                        $assignedMdType = 'MO';
                    }
                    break;

                case 'MO':
                    if ($moduleInArray){
                        $assignedMdType = 'MO';
                    }else{
                        $assignedMdType = 'OB';
                    }
                    break;
                
                default:
                    $assignedMdType = $originalType;
                    break;
            }

            ModulesTaken::create([
                'module_id' => $request->module_id,
                'student_id' => $student->student_username,
                'status' => $request->status,
                'grade' => $request->grade,
                'assigned_md_type' => $assignedMdType,
            ]);
        }
    
        return redirect()->back()->with('success', 'Record added successfully.');
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'module_id' => 'required|string',
            'status' => 'nullable|in:0,1',
            'grade' => 'nullable|string',
        ]);

        $module = Module::findOrFail($id);
        $module->update($validated);
        return redirect()->back()->with('success', 'Record updated successfully.');
    }

}