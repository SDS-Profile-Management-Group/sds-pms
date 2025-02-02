<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

// TODO: Enter StudentInfo Model class to insert information into student information table

class ProfileController extends Controller
{
    public function enterDetails(Request $request){
        $incomingFields = $request->validate([
            "full_name" => ["required","regex:/^[a-zA-Z\s]+$/"],
            "dob" => ["required"],
            "contact_number" => ["required"],
            // TODO: Enter details for alternative email
            "alt_email"=>["required"],
        ]);

        // ? Ensure we're updating the profile with the right username
        $profile = Profile::firstOrNew([
            'username' => auth()->user()->asg_username,  
        ]);
    
        // Update details if the info exists or create a new one
        $profile->full_name = $incomingFields['full_name'];
        $profile->dob = $incomingFields['dob'];
        $profile->contact_number = $incomingFields['contact_number'];
        $profile->alt_email = $incomingFields['alt_email'];
        $profile->save();
    
        return redirect('/home');
    }

    public function editDetails() {
        return view('edit');
    }
}
