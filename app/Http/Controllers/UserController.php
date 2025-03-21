<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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

            "full_name" => ["required", "regex:/^[a-zA-Z\s]+$/"],
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
        $this->userService->createUserProfile($user, $incomingFields);

        // Register student or staff
        if ($user->user_type === 'student') {
            $this->userService->registerStudent($user, $incomingFields);
        } elseif ($user->user_type === 'staff') {
            $this->userService->registerStaff($user);
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
        $incomingFields = $request->validate([
            "login-name" => "required",
            "login-password" => "required"
        ]);

        if (auth()->attempt(['asg_username' => $incomingFields['login-name'], 'password' => $incomingFields['login-password']])) {
            $request->session()->regenerate();
        }

        return redirect('/home');
    }
}
