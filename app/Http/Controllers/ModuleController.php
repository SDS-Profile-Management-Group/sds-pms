<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UBD\Modules;
use App\Models\UBD\ModuleBelongsTo;
use App\Models\Student\ModulesTaken;
use App\Models\Profile;
use App\Models\Info\Student;

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

        return view('education/module_tracker', compact('records', 'mcBreakdown'));
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

    public function store(Request $request){
        $request->validate([
            'module_id' => 'required|string',
            'status' => 'nullable|in:0,1',
            'grade' => 'nullable|string',
        ]);

        $student = Student::where('student_username', auth()->user()->asg_username)->first();
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

    public function update(Request $request, $moduleId){
        // ! NEED MORE BETTER UPDATES
        // Find the module record using the provided module_id
        $module = ModulesTaken::where('module_id', $moduleId)
            ->where('student_id', auth()->user()->asg_username)
            ->first();

        // Check if module exists
        if (!$module) {
            return redirect()->back()->with('error', 'Module not found.');
        }

        // Validate only the necessary fields
        $validatedData = $request->validate([
            'grade' => 'nullable|string|max:10',
            'status' => 'nullable|boolean',  // Ensure status is validated as a boolean
        ]);

        // If status is provided in the request, cast it to a boolean explicitly
        $status = isset($validatedData['status']) ? (bool) $validatedData['status'] : $module->status;

        // Log to check the value of status and its type
        \Log::info('Status value:', ['status' => $status, 'type' => gettype($status)]);
        \Log::info('Status value before update:', ['status' => $validatedData['status'] ?? 'Not set']);
        // Now update only the required field, status in this case
        $module->status = $status;
        $module->save();

        // Log the updated module details
        \Log::info('Module updated', [
            'module_id' => $moduleId,
            'student_id' => $module->student_id,
            'assigned_md_type' => $module->assigned_md_type,
            'status' => $status,
            'grade' => $module->grade,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Record updated successfully.');
    }

}