@extends('layouts.app')

@section('title', 'Posts')

@section('scripts')
<script src="{{ asset('js/posts/toggle-posts.js') }}"></script>
<script src="{{ asset('js/popup/popup.js') }}"></script>
@endsection

@section('content')
    @section('navbar_type','major')
    
    @include('partials._success')
    
    @include('partials._post_form')

    <div class="flex gap-4 mb-6 items-center justify-center">
        <button onclick="toggleView('own')" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
            My Posts
        </button>
        <button onclick="toggleView('public')" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
            Public Posts
        </button>
        <button onclick="toggleView('all')" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
            All
        </button>
    </div>

    @include('partials._post_thread')
@endsection