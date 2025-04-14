@extends('layouts.app')

@section('title', 'Posts')

@section('scripts')
<script src="{{ asset('js/posts/toggle-posts.js') }}"></script>
@endsection

@section('content')
    @section('navbar_type','major')
    
    @if (session('success'))
    <div id="success-popup" class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-md shadow-md">
        {{ session('success') }}
    </div>
    
    <script>
        setTimeout(() => {
            document.getElementById('success-popup').style.display = 'none';
        }, 1500);
    </script>
    @endif
    
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