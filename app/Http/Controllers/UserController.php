<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(Request $request){
        // Merge the email field by appending "@ubd.edu.bn" to the asg_username
        $request->merge([
            'email' => $request->input('asg_username') . '@ubd.edu.bn'
        ]);

        $commonFields = [
            "asg_username" => ["required", Rule::unique('users', 'asg_username')],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "min:8"],
            "user_type" => ["required"],
            "full_name" => ["required", "regex:/^[a-zA-Z\s]+$/"],
        ];

        $studentFields = [
            // "full_name" => ["required", "regex:/^[a-zA-Z\s]+$/"],
            "student_nationality" => ["required"],
            "major_id" => ["required"],
        ];

        $staffFields = [
            "staff_type" => ["required"],
        ];

        if ($request->input('user_type') === 'student') {
            $incomingFields = $request->validate(array_merge($commonFields, $studentFields));
        } elseif ($request->input('user_type') === 'staff') {
            $incomingFields = $request->validate(array_merge($commonFields, $staffFields));
        } else {
            return back()->withErrors(['user_type' => 'Invalid user type']);
        }

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
            $this->userService->registerStaff($user, $incomingFields);
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

        if (auth()->attempt([
            'asg_username' => $incomingFields['login-name'],
            'password' => $incomingFields['login-password']
        ])) {
            $request->session()->regenerate();
            return redirect('/home');
        }

        // Redirect back with error if login fails
        return back()->withErrors([
            'login-name' => 'The provided credentials are incorrect.',
        ])->withInput();
    }
}
