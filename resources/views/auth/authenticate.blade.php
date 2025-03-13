@extends('layouts.app')

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
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Login</button>
        </form>

        <!-- Register Form (Hidden by Default) -->
        <form id="registerForm" action="{{ route('register') }}" method="POST" class="hidden">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Full Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg">Register</button>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const loginTab = document.getElementById("loginTab");
    const registerTab = document.getElementById("registerTab");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    loginTab.addEventListener("click", () => {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
        loginTab.classList.add("text-blue-500", "border-blue-500");
        registerTab.classList.remove("text-blue-500", "border-blue-500");
        registerTab.classList.add("text-gray-500");
    });

    registerTab.addEventListener("click", () => {
        registerForm.classList.remove("hidden");
        loginForm.classList.add("hidden");
        registerTab.classList.add("text-blue-500", "border-blue-500");
        loginTab.classList.remove("text-blue-500", "border-blue-500");
        loginTab.classList.add("text-gray-500");
    });
});
</script>
@endsection
