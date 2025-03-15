@extends('layouts.app')

@section('title', 'Module Tracker - ' . Auth::user()->asg_username)

@section('scripts')
    {{-- <script src="{{ asset('js/toggle/toggle.js') }}"></script> --}}
@endsection

@section('navbar_type', 'mc')

@section('content')
    <h1 class="text-3xl font-semibold my-4">Module Tracker Table</h1>

    <div class="flex flex-col md:flex-row gap-6">
        <div class="bg-white shadow-md rounded-lg p-6 mb-6 md:w-1/2">
            <h3 class="text-xl font-bold mb-2 cursor-pointer" id="graduation-toggle">Graduation Requirements</h3>
            <div id="graduation-content" class="mt-4" >
                {{-- style="display: none;" --}}
                <p class="mb-4">Students are required to accumulate a <b>minimum of 152 Modular Credit (MCs)</b> from a combination of degree core, major core, major option, and breadth modules as specified below and in the Programme Structure of the major that the student has chosen to specialize in.</p>
                <p class="mb-4">A student must pass with a <b>maximum of 40 Modular Credits (MCs) from Level 1000 modules</b> and a <b>minimum of 24 Modular Credits (MCs) from Level 4000 modules</b> from their major subject.</p>
    
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 border">Category</th>
                            <th class="py-2 px-4 border">Requirements</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border">Degree Core (12 MCs)</td>
                            <td class="py-2 px-4 border">A student <b>must pass all 12 Modular Credits (MCs)</b> of degree core modules as prescribed in the programme structure of the major that the student has chosen to specialize in.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border">Major Core (48 MCs)</td>
                            <td class="py-2 px-4 border">A student <b>must pass at least 48 Modular Credits (MCs)</b> of major core modules in the major area of study.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border">Major Option (36 MCs)</td>
                            <td class="py-2 px-4 border">A student <b>must pass all 36 Modular Credits (MCs)</b> of major option modules in the major area of study.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border">Breadth Modules (16 MCs)</td>
                            <td class="py-2 px-4 border">A student <b>must pass at least 16 Modular Credits (MCs)</b> of compulsory breadth modules, with 8 MCs from each of the two designated breadth areas.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border">Discovery Year Programme (32 MCs)</td>
                            <td class="py-2 px-4 border">A student <b>must complete the Discovery Year Programme</b> with 32 MCs of modules.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
        <div id="mc-tally" class="bg-white shadow-md rounded-lg p-6 mb-6 md:w-1/2">
            <h3 class="text-xl font-semibold mb-4">Module Credit Breakdown</h3>
            <div id="mc-collection" class="space-y-4">
                <h4 class="font-bold">Overall MC Obtained</h4>
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <tr>
                        <th class="py-2 px-4 border">Category</th>
                        <th class="py-2 px-4 border">Required Value (MC)</th>
                        <th class="py-2 px-4 border">Acquired (MC)</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Degree Core</th>
                        <td class="py-2 px-4 border text-center">12</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['DC'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Major Core</th>
                        <td class="py-2 px-4 border text-center">48</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['MC'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Major Option</th>
                        <td class="py-2 px-4 border text-center">36</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['MO'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Compulsory Breadth</th>
                        <td class="py-2 px-4 border text-center">16</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['CB'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Discovery Year Programme</th>
                        <td class="py-2 px-4 border text-center">32</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['DY'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Remaining Breadth or Option Modules</th>
                        <td class="py-2 px-4 border text-center">8</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['Other Breadth'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Total</th>
                        <td class="py-2 px-4 border text-center">152</td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown->sum() ?? 0 }}</td>
                    </tr>
                </table>
            </div>
            <br>
            <div id="lvl-restriction" class="space-y-4">
                <h4 class="font-bold">Level 1000 & 4000 Restrictions</h4>
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <tr>
                        <th class="py-2 px-4 border">Level</th>
                        <th class="py-2 px-4 border">Instructions</th>
                        <th class="py-2 px-4 border">Acquired (MC)</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Level 1000</th>
                        <td class="py-2 px-4 border"></td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['DC'] ?? 0 }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border">Level 4000</th>
                        <td class="py-2 px-4 border"></td>
                        <td class="py-2 px-4 border text-center">{{ $mcBreakdown['MC'] ?? 0 }}</td>
                    </tr>
                </table>
            </div>


        </div>
    </div>

    <div class="flex justify-end gap-4 mt-4">
        <button id="add-record-btn" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Add Record
        </button>
        <button id="edit-record-btn" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
            Edit Record
        </button>
    </div>

    <!-- Compulsory Breadth Modules -->
    @include('partials.modules._cb_table', ['records' => $records])

    <!-- Degree Core Modules -->
    @include('partials.modules._dc_table', ['records' => $records])

    <!-- Major Core Modules -->
    @include('partials.modules._mc_table', ['records' => $records])

    <!-- Major Option Modules -->
    @include('partials.modules._mo_table', ['records' => $records])

    <!-- Other Breadth Modules -->
    @include('partials.modules._ob_table', ['records' => $records])

    <!-- Discovery Year -->
    @include('partials.modules._dy_table', ['records' => $records])

@endsection