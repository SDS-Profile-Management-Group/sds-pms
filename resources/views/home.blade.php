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
                @include('partials._major_identification', ['major_id' => Auth::user()->studentInfo->major_id ?? null])
            @endif
        </span>
    </p>
    <p class="text-gray-700"><span class="font-semibold">Year of Study:</span> <span class="text-gray-900">TBI</span></p>
    <p class="text-gray-700">
        <span class="font-semibold">Current CGPA:</span> 
        <span class="text-gray-900">
            @if (Auth::user()->studentInfo && Auth::user()->studentInfo->cgpa)
                {{ collect(json_decode(Auth::user()->studentInfo->cgpa, true))->last() ?? 'N/A' }}
            @else
                N/A
            @endif
        </span>
    </p>
@endsection

@section('staff-info')
    @php
        $pl_privilege = Auth::user()->staffInfo->pl_privilige ?? null;
    @endphp

    <p class="text-gray-700">
        <span class="font-semibold">Faculty:</span>
        <span class="text-gray-900">School of Digital Science</span>
    </p>

    <p class="text-gray-700">
        <span class="font-semibold">Role:</span> 
        <span class="text-gray-900">
            @if (Auth::user()->staffInfo)
                @if ($pl_privilege)
                    Program Leader | Lecturer
                @else
                    Lecturer
                @endif
            @endif
        </span>
    </p>

    @if($pl_privilege)
        <p class="text-gray-700">
            <span class="font-semibold">Major Coordinator:</span>
            <span class="text-gray-900">
                @include('partials/_major_identification', ['major_id' => Auth::user()->staffInfo->leadingMajor->major_id ?? null])
            </span>
        </p>
    @endif

    <p class="text-gray-700">
        <span class="font-semibold">Modules Taught:</span>
        <span class="text-gray-900">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
    </p>

@endsection

@section('extra-buttons')

    @if (Auth::check() && Auth::user()->userProfile)
        @if (Auth::user()->userProfile->isStudent())
            <a href="{{ route('module-tracker') }}" class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 mr-3 rounded-lg shadow-md transition duration-300">
                Module Tracker
            </a>
            <a href="{{ route('cgpa-overview') }}" class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 rounded-lg shadow-md transition duration-300">
                CGPA Information
            </a>
        @elseif (Auth::user()->userProfile->isStaff())
            <a href="{{ route('module-overview') }}" 
            class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 mr-3 rounded-lg shadow-md transition duration-300">
                Module Listing
            </a>

            @if (Auth::user()->staffInfo->pl_privilige)
                <a href="{{ route('major-overview') }}" 
                class="btn bg-gray-600 hover:bg-gray-700 text-white font-semibold py-1 px-2 mr-3 rounded-lg shadow-md transition duration-300">
                    Major Information
                </a>
            @endif
            
        @endif
    @endif
    
@endsection



@section('dashboard')
    @include('partials._post_form')
    {{-- @include('partials._post_thread') --}}
@endsection