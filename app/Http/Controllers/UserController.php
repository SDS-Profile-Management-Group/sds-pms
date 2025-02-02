<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\StudentInfo;
use App\Models\StaffInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        // Merge the email field by appending "@ubd.edu.bn" to the asg_username
        $request->merge([
            'email' => $request->input('asg_username') . '@ubd.edu.bn'
        ]);

        // Validate the incoming fields
        $incomingFields = $request->validate([
            "asg_username" => ["required", Rule::unique('users', 'asg_username')],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "min:8"],
            "user_type" => ["required"],
        ]);

        // Encrypt the password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // Create the user record
        $user = User::create($incomingFields);

        // Create the profile record
        Profile::create([
            'username' => $user->asg_username,
            'role' => $user->user_type,
        ]);

        // Insert into the appropriate table based on the user type
        if ($user->user_type === 'student') {
            // Insert into the 'student_info' table
            StudentInfo::create([
                'student_username' => $user->asg_username, 
                // Other fields specific to student_info can be added here
            ]);
        } else if ($user->user_type === 'staff') {
            // Insert into the 'staff_info' table
            StaffInfo::create([
                'staff_username' => $user->asg_username,
                // Other fields specific to staff_info can be added here
            ]);
        }


        // Log in the user
        auth()->login($user);

        return redirect('/home');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields =$request->validate([
            "login-name" => "required",
            "login-password" => "required"
        ]);

        if (auth()->attempt(['asg_username' => $incomingFields['login-name'],'password'=> $incomingFields['login-password']])) {
            $request ->session()->regenerate();
        }

        return redirect('/home');
    }

}
