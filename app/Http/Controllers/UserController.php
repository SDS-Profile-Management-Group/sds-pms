<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\StudentInfo;
use App\Models\StaffInfo;
use App\Models\Student\ModulesTaken;
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

            "full_name" => ["required","regex:/^[a-zA-Z\s]+$/"],
            "student_nationality" => ["required"],
            "major_id" => ["required"],
        ]);

        // Encrypt the password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // Create the user record
        $user = User::create(
            collect($incomingFields)->only(['asg_username', 'email', 'password', 'user_type'])->toArray()
        );

        // Create the profile record
        Profile::create([
            'username' => $user->asg_username,
            'full_name' => $incomingFields['full_name'],
            'role' => $user->user_type,
        ]);

        
        if ($user->user_type === 'student') {
            // Insert into the 'student_info' table
            StudentInfo::create([
                'student_username' => $user->asg_username,
                'student_nationality' => $incomingFields['student_nationality'],
                'major_id' => $incomingFields['major_id'],
                // Other fields specific to student_info can be added here
            ]);

            ModulesTaken::insert([
                [
                    'module_id' => 'LE-1503',
                    'student_id' => $user->asg_username,
                    'assigned_md_type' => 'CB',
                ],

                [
                    'module_id' => 'LE-2503',
                    'student_id' => $user->asg_username,
                    'assigned_md_type' => 'CB',
                ],

                [
                    'module_id' => 'PB-1501',
                    'student_id' => $user->asg_username,
                    'assigned_md_type' => 'CB',
                ],

                [
                    'module_id' => 'MS-1501',
                    'student_id' => $user->asg_username,
                    'assigned_md_type' => 'CB',
                ],
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
