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
            "asg_username" => ["required", Rule::unique('users', 'asg_username')],
            "email"=> ["required","email", Rule::unique('users', 'email')],
            "password"=> ["required","min:8"],
            "user_type"=>["required"],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        Profile::create([
            'username' =>$user->asg_username,
            'role' =>$user->user_type,
        ]);
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
