@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/profile/toggle-profile.js') }}"></script>
@endsection

@section('title', 'Profile')

@section('navbar_type','profile')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">User Profile</h2>
        <button id="editButton" 
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300"
                onclick="toggleReadOnly()">
            Edit Profile
        </button>
    </div>
        
    <form id="updateProfileForm" method="POST" action="{{ route('profile.update') }}">
        @csrf <!-- CSRF Token for Laravel -->

        <div class="space-y-4">
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Full Name</label>
                <input id="full_name" type="text" name="full_name" value="{{ $user->userProfile->full_name ?? 'N/A' }}" readonly class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Contact Number</label>
                <input id="contact_number" type="text" name="contact_number" value="{{ $user->userProfile->contact_number ?? 'N/A' }}" readonly class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Date of Birth</label>
                <input id="dob" type="text" name="dob" value="{{ $user->userProfile->dob ?? 'N/A' }}" readonly class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Role</label>
                <input id="role" type="text" value="{{ ucfirst($user->user_type ?? 'N/A') }}" readonly class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-800" disabled>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Alternative Email</label>
                <input id="alt_email" type="text" name="alt_email" value="{{ $user->userProfile->alt_email ?? 'N/A' }}" readonly class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-800">
            </div>
        </div>
    </form>
</div>
@endsection