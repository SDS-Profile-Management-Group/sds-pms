@extends('layouts.app')
@section('scripts')
    <script src="{{ asset('js/auth/authenticate.js') }}"></script>
@endsection
@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <!-- Tab Navigation -->
        <div class="flex justify-around mb-4">
            <button id="loginTab" class="tab-btn text-blue-500 font-semibold border-b-2 border-blue-500 pb-2 w-1/2">Login</button>
            <button id="registerTab" class="tab-btn text-gray-500 font-semibold pb-2 w-1/2">Register</button>
        </div>

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
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg">Register</button>
        </form>

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
    </div>
@endsection