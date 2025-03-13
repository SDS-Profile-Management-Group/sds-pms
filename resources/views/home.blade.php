@extends('layouts.app')
<style>
    .btn {
        display: inline-block; /* Makes it behave like a button */
        padding: 10px 20px;   /* Add padding */
        background-color: gray; /* Button background color */
        color: white;          /* Text color */
        text-decoration: none;  /* Remove underline */
        border-radius: 5px;    /* Rounded corners */
    }
</style>

@section('title', 'Homepage - ' . Auth::user()->asg_username)

@section('navbar')
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-lg font-bold text-blue-600">SDS PMS</a>
            <div>
                <!-- Logging Out -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" 
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    @auth

    <div class="welcome-sect">
        @if (Auth::user()->userProfile)
            @if (Auth::user()->userProfile->full_name)
                <h1 class="text-3xl">Welcome, <span class="headerID italic">{{ Auth::user()->userProfile->full_name }}</span>!</h1>
            @else
                <h1 class="text-3xl">Welcome, <span class="headerID italic">{{ Auth::user()->asg_username }}</span>!</h1>
            @endif
        @endif
    </div>

    <div class="short-bio bg-white shadow-lg rounded-lg p-6 max-w-md ml-4">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Biography</h3>
        <p class="text-gray-700"><span class="font-semibold">Name:</span> <span class="info text-gray-900">{{ Auth::user()->userProfile->full_name }}</span></p>
        <p class="text-gray-700"><span class="font-semibold">Age:</span> <span class="info text-gray-900">{{ \Carbon\Carbon::parse(Auth::user()->userProfile->dob)->age }}</span></p>
        <p class="text-gray-700"><span class="font-semibold">Contact Number:</span> <span class="info text-gray-900">{{ Auth::user()->userProfile->contact_number }}</span></p>
        <p class="text-gray-700"><span class="font-semibold">Alternative Email Address:</span> <span class="info text-gray-900">{{ Auth::user()->userProfile->alt_email }}</span></p>
        {{-- TODO: Add more details in the future --}}
        <a href="{{ route('edit-details') }}" 
        class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
            Edit Details
        </a>
    </div>
    

    <div class="buttons">
        <a href="{{ route('module-tracker') }}" class="btn">Module Tracker</a>
    </div>

    @endauth
@endsection
