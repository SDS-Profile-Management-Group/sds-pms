<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function enterName(Request $request){
        $incomingFields = $request->validate([
            "full_name" => "required|regex:/^[a-zA-Z\s]+$/", // Allows letters and spaces
        ]);

        // ? Ensure we're updating the profile with the right username
        $profile = Profile::firstOrNew([
            'username' => auth()->user()->username,  
        ]);
    
        // Update the full name if the profile exists or create a new one
        $profile->full_name = $incomingFields['full_name'];
        $profile->save();
    
        return redirect('/home');
    }
}
