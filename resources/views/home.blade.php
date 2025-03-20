@extends('layouts.homeview')

@section('title', 'Homepage - ' . Auth::user()->asg_username)

@section('page-title')
    @if (Auth::user()->userProfile && Auth::user()->userProfile->full_name)
        Welcome, <span class="headerID italic">{{ Auth::user()->userProfile->full_name }}</span>!
    @else
        Welcome, <span class="headerID italic">{{ Auth::user()->asg_username }}</span>!
    @endif
@endsection

@section('profile-content')
    <h3 class="text-xl font-bold text-gray-800 mb-4">Biography</h3>
    <p class="text-gray-700"><span class="font-semibold">Name:</span> <span class="text-gray-900">{{ Auth::user()->userProfile->full_name }}</span></p>
    <p class="text-gray-700"><span class="font-semibold">Age:</span> <span class="text-gray-900">{{ \Carbon\Carbon::parse(Auth::user()->userProfile->dob)->age }}</span></p>
    <p class="text-gray-700"><span class="font-semibold">Contact Number:</span> <span class="text-gray-900">{{ Auth::user()->userProfile->contact_number }}</span></p>
    <p class="text-gray-700"><span class="font-semibold">Alternative Email Address:</span> <span class="text-gray-900">{{ Auth::user()->userProfile->alt_email }}</span></p>
@endsection

@section('student-info')
    <h3 class="text-xl font-bold text-gray-800 mb-4">Academic Overview</h3>
    <p class="text-gray-700"><span class="font-semibold">Faculty:</span> <span class="text-gray-900">School of Digital Science</span></p>
    <p class="text-gray-700">
        <span class="font-semibold">Major:</span> 
        <span class="text-gray-900">
            @if (Auth::user()->studentInfo)
                @switch(Auth::user()->studentInfo->major_id)
                    @case('ZA')
                        Artificial Intelligence & Robotics
                        @break
                    @case('ZC')
                        Computer Science
                        @break
                    @case('ZD')
                        Data Science
                        @break
                    @case('ZI')
                        Applied Artifical Intelligence
                        @break
                    @case('ZS')
                        Cybersecurity & Forensics
                        @break
                    @default
                        No Major Assigned
                @endswitch
            @else
                No Major Assigned
            @endif
        </span>
    </p>
    <p class="text-gray-700"><span class="font-semibold">Year of Study:</span> <span class="text-gray-900">TBI</span></p>
    <p class="text-gray-700"><span class="font-semibold">Current CGPA:</span> <span class="text-gray-900">{{Auth::user()->studentInfo->cgpa}}</span></p>
@endsection

@section('extra-buttons')
    <a href="{{ route('module-tracker') }}" class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 mr-3 rounded-lg shadow-md transition duration-300">
        Module Tracker
    </a>
    <a href="{{ route('module-tracker') }}" class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 rounded-lg shadow-md transition duration-300">
        CGPA Information
    </a>
@endsection

@section('dashboard')
    <div>
        <h1>This is a dashboard</h1>
    </div>
@endsection