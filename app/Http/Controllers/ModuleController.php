<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulesTaken; // Import the ModulesTaken model
use App\Models\StudentInfo;
use Illuminate\Support\Facades\Auth; // Optional: import if you're using Auth

class ModuleController extends Controller
{
    public function saveModules(Request $request)
    {
        // Validate the incoming request data
        $incomingFields = $request->validate([
            'student_id' => 'required|string|exists:student_info,student_username', // Validate existence in student_info
            'modules_taken' => 'required|array',
            'modules_taken.*.module_code' => 'required|string',
            'modules_taken.*.credits' => 'sometimes|integer',
        ]);
    
        // Process each module
        foreach ($incomingFields['modules_taken'] as $module) {
            ModulesTaken::updateOrCreate(
                [
                    'module_id' => $module['module_code'],
                    'student_id' => $incomingFields['student_id'],
                ],
                [
                    'credits' => $module['credits'] ?? null,
                ]
            );
        }
    
        return response()->json(['success' => true]);
    }
}
