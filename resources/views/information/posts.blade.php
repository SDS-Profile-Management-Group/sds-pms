@extends('layouts.app')

@section('title', 'Posts')

@section('scripts')
<script src="{{ asset('js/posts/toggle-posts.js') }}"></script>
@endsection

@section('content')
    @section('navbar_type','major')

    @include('partials._post_form')
    @include('partials._post_thread')
@endsection