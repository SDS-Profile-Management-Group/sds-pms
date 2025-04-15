@extends('layouts.app')

@section('title', 'Major Information')

@section('navbar_type','others')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 mb-6 module-div">
        <span>
            <h3 class="text-xl font-semibold">
                Major: 
                @if($staffRecords->isNotEmpty()) 
                    {{ $staffRecords->first()->leadingMajor->major_name }} <!-- Assuming first staff's major is the relevant major -->
                @else
                    N/A
                @endif
            </h3> 
        </span>
        
        <span>
            <h4 class="text-base font-light">Program Leader: 
                @if($staffRecords->isNotEmpty())
                    {{ $staffRecords->first()->user->userProfile->full_name }} <!-- Assuming first staff's full name -->
                @else
                    N/A
                @endif                
            </h4>
        </span>


        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Student ID</th>
                    <th class="py-2 px-4 border">Semester</th>
                    <th class="py-2 px-4 border">Current CGPA</th>
                </tr>
            </thead>

            <tbody>
                @foreach($studentRecords as $record)
                    <tr>
                        <td class="py-2 px-4 border">
                            {{ $record->user->userProfile->full_name }}
                        </td>
                        <td class="py-2 px-4 border">
                            {{ $record->student_username }}
                        </td>
                        <td class="py-2 px-4 border">
                            {{ collect(json_decode($record->cgpa, true))->keys()->last() }}
                        </td> 
                        <td class="py-2 px-4 border">
                            {{ collect(json_decode($record->cgpa , true))->last() ?? 'N/A' }}
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection