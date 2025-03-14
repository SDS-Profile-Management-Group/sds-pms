@extends('layouts.app')

@section('scripts')
    <script src="{{ asset('js/auth/authenticate.js') }}"></script>
@endsection

@section('title', 'Login | Register ')


@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <!-- Tab Navigation -->
        <div class="flex justify-around mb-4">
            <button id="loginTab" class="tab-btn text-blue-500 font-semibold border-b-2 border-blue-500 pb-2 w-1/2">Login</button>
            <button id="registerTab" class="tab-btn text-gray-500 font-semibold pb-2 w-1/2">Register</button>
        </div>

        <!-- Login Form -->
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="login-name" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="login-password" class="w-full p-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Log In</button>
        </form>

        <!-- Register Form (Hidden by Default) -->
        <form id="registerForm" action="{{ route('register') }}" method="POST" class="hidden">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="asg_username" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Choose User Type</label>
                <select name="user_type" class="w-full p-2 border rounded-lg">
                    <option value="" disabled selected>Select User Type</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                </select>
            </div>

            <div class="mb-4 student-questions hidden">
                <label class="block text-gray-700">Full Name</label>
                <input type="text" name="full_name" class="w-full p-2 border rounded-lg" required>

                <label class="block text-gray-700">Local or International Student?</label>
                <select name="student_nationality" class="w-full p-2 border rounded-lg">
                    <option value="" class="text-gray-500 italic" disabled selected >Select if you're a Local or International Student</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
                
                <label class="block text-gray-700">Selected SDS Major</label>
                <select name="major_id" class="w-full p-2 border rounded-lg">
                    <option value="" class="text-gray-500 italic" disabled selected >Select your chosen SDS Major</option>
                    <option value="ZA">Artificial Intelligence & Robotics</option>
                    <option value="ZC">Computer Science</option>
                    <option value="ZD">Data Science</option>
                    <option value="ZI">Applied Artifical Intelligence</option>
                    <option value="ZS">Cybersecurity & Forensics</option>
                </select>
            </div>
        
            <div class="mb-4 staff-questions hidden">
                <label class="block text-gray-700">Staff-Specific Questions</label>
                <input type="text" name="staff_question_1" class="w-full p-2 border rounded-lg" placeholder="Staff Question 1">
                <input type="text" name="staff_question_2" class="w-full p-2 border rounded-lg" placeholder="Staff Question 2">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg">Register</button>
        </form>

    </div>
@endsection