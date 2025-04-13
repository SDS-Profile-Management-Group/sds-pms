<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\User;


class ProfileController extends Controller
{
    public function showProfile($user_id){
        // You can now use $user_id to find the user
        $user = User::where('asg_username', $user_id)->first();

        if (!$user) {
            abort(404);
        }

        return view('information/profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $user->userProfile->update([
            'full_name' => $request->input('full_name'),
            'contact_number' => $request->input('contact_number'),
            'dob' => $request->input('dob'),
            'alt_email' => $request->input('alt_email'),
        ]);

        // Redirect back to the profile page or to a confirmation page
        return redirect()->route('profile-overview', ['user_id' => $user->asg_username])
                         ->with('success', 'Profile updated successfully!');
        // return view('home');
    }
}
