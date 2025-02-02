<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\Profile;

class ModuleController extends Controller
{
    public function saveModules(Request $request){
        
    }

    public function redirectMCT() {
        return view('moduleTracker');
    }
}
