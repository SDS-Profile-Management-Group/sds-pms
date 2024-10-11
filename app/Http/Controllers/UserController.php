<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            "username" => ["required", Rule::unique('users', 'username')],
            "email"=> ["required","email", Rule::unique('users', 'email')],
            "password"=> ["required","min:8"],
            "user_type"=>["required"],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        Profile::create([
            "username" => $incomingFields['username']
        ]);
        auth()->login($user);

        return redirect('/');
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

        if (auth()->attempt(['username' => $incomingFields['login-name'],'password'=> $incomingFields['login-password']])) {
            $request ->session()->regenerate();
        }

        return redirect('/');
    }

    public function enterName(Request $request){
        // Validate the incoming full name
        $incomingFields = $request->validate([
            "full_name" => "required|regex:/^[a-zA-Z\s]+$/", // Allows letters and spaces
        ]);

        $profile = Profile::firstOrNew([
            'username' => auth()->user()->username,  // Ensure we're updating the profile with the right username
        ]);
    
        // Update the full name if the profile exists or create a new one
        $profile->full_name = $incomingFields['full_name'];
        $profile->save(); // Save the profile
    
        // Redirect with success message
        return redirect('/');
    }

}
