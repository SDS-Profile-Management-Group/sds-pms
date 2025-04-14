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

    <div class="flex flex-wrap gap-4 mb-6 justify-center items-center">
        <!-- Post Type -->
        <select id="filter-type" onchange="applyFilters()" class="px-4 py-2 rounded border">
            <option value="">All Types</option>
            <option value="announcement">Announcement</option>
            <option value="personal">Personal</option>
        </select>
    
        <!-- Category -->
        <select id="filter-category" onchange="applyFilters()" class="px-4 py-2 rounded border">
            <option value="">All Categories</option>
            <option value="academic">Academic</option>
            <option value="non-academic">Non-Academic</option>
        </select>
    
        <!-- Location -->
        <select id="filter-location" onchange="applyFilters()" class="px-4 py-2 rounded border">
            <option value="">All Locations</option>
            <option value="on-campus">On Campus</option>
            <option value="off-campus">Off Campus</option>
        </select>

        <button 
            onclick="resetFilters()" 
            class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition">
            Reset Filters
        </button>
    </div>

    @include('partials._post_thread')
@endsection