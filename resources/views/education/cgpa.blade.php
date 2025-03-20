@extends('layouts.app')

@section('title', 'CGPA - ' . Auth::user()->asg_username)

@section('scripts')
    <script src="{{ asset('js/tracker/cgpa-tracker.js') }}"></script>
@endsection

@section('navbar_type', 'cgpa')



@section('content')
    @include('partials._cgpa_table')

    @include('partials._modal', ['modalType' => 'cgpa'])

@endsection