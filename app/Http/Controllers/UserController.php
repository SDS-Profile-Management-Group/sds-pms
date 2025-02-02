<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
{
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
