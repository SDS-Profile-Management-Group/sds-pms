@extends('layouts.app')

@section('title', 'Homepage - ' . Auth::user()->asg_username)

@section('content')
    @section('navbar_type', 'dashboard')
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h1 class="text-3xl mb-4">@yield('page-title', 'Welcome')</h1>

        <div class="flex gap-6">
            <div class="w-1/3 bg-gray-100 p-4 rounded-lg flex flex-col items-center">
                {{-- TODO: Figure out how to enter profile picture --}}
                <img src="{{ Auth::user()->userProfile->profile_picture ?? asset('images/default-avatar.png') }}" 
                     alt="Profile Picture" 
                     class="w-32 h-32 rounded-full object-cover shadow-md">

                <a href="{{ route('profile-overview', ['user_id' => auth()->user()->asg_username]) }}" 
                   class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                    Profile
                </a>
            </div>

            <div class="w-2/3 bg-gray-100 p-4 rounded-lg">
                @yield('profile-content')
            </div>

            <div class="w-2/3 bg-gray-100 p-4 rounded-lg">
                @php
                    $user = Auth::user();
                @endphp
            
                @if ($user?->userProfile)
                    @if ($user->userProfile->isStudent())
                        @yield('student-info')
                    @elseif ($user->userProfile->isStaff())
                        @yield('staff-info')
                    @endif
                @endif
            </div>

        </div>

        <div class="mt-6 flex justify-center">
            @yield('extra-buttons')
        </div>
    </div>

    <div class="w-full h-[1px] bg-gray-300 shadow-sm my-6"></div>

    @yield('dashboard')
@endsection