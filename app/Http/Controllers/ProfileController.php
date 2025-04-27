<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Resource\File;
use App\Models\Profile;
use App\Models\User;


class ProfileController extends Controller
{
    public function showProfile($user_id){
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

        return redirect()->route('profile-overview', ['user_id' => $user->asg_username])
                         ->with('success', 'Profile updated successfully!');
    }

    public function uploadProfilePicture(Request $request){
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = auth()->user();

        // Delete old profile picture record
        $oldPic = $user->profilePicture;
        if ($oldPic) {
            Storage::delete($oldPic->file_path);
            $oldPic->delete();
        }

        // Store new profile picture
        $file = $request->file('profile_picture');
        $filename = $user->asg_username . '_profile_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/profile_pictures', $filename);

        File::create([
            'asg_username' => $user->asg_username,
            'file_name' => $filename,
            'file_path' => $path,
            'type' => 'profile_picture',
        ]);

        return back()->with('success', 'Profile picture updated.');
    }
}
