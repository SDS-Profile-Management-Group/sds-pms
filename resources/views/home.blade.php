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
@section('content')
    @auth

    <div class="welcome-sect">
        @if (Auth::user()->userProfile)
            @if (Auth::user()->userProfile->full_name)
                <h1>Welcome, <span class="headerID">{{ Auth::user()->userProfile->full_name }}</span>!</h1>
            @else
                <p>Welcome, <span class="headerID">{{ Auth::user()->asg_username }}</span>!</p>
            @endif
        @endif
    </div>

    <div class="short-bio">
        <h3>Biography</h3>
        <p>Name: <span class="info">{{ Auth::user()->userProfile->full_name }}</span></p>
        <p>Age: <span class="info">{{ \Carbon\Carbon::parse(Auth::user()->userProfile->dob)->age }}</span></p>
        <p>Contact Number: <span class="info">{{ Auth::user()->userProfile->contact_number }}</span></p>
        <p>Alternative Email Address: <span class="info">{{ Auth::user()->userProfile->alt_email }}</span></p>
        {{-- TODO: Add more details in the future --}}
    </div>

    <div class="buttons">
        <a href="{{ route('edit-details') }}" class="btn">Edit Details</a>

        <a href="{{ route('module-tracker') }}" class="btn">Module Tracker</a>

        <form action="/logout" method="POST">
            @csrf
            <button class="btn">Log out</button>
        </form>
    </div>

    @endauth
@endsection
