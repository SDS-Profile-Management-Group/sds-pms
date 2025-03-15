@extends('layouts.app')

@section('title', 'Module Tracker - ' . Auth::user()->asg_username)

@section('scripts')
    <script src="{{ asset('js/toggle/toggle.js') }}"></script>
@endsection

@section('navbar_type', 'home')

@section('content')
    <a href="{{ url('/home') }}">
        <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Go Home</button>
    </a>

    <h1 class="text-3xl font-semibold my-4">Module Tracker Table</h1>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h3 class="text-xl font-bold mb-2 cursor-pointer" id="graduation-toggle">Graduation Requirements</h3>
        <div id="graduation-content" class="mt-4" style="display: none;">
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

    <div id="mc-tally" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Module Credit Breakdown</h3>
        <div id="mc-collection" class="space-y-4">
            <h4 class="font-bold">Overall MC Obtained</h4>
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <tr>
                    <th class="py-2 px-4 border">Category</th>
                    <th class="py-2 px-4 border">Required Value</th>
                    <th class="py-2 px-4 border">Accumulated</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Degree Core</th>
                    <td class="py-2 px-4 border">12</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['DC'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Major Core</th>
                    <td class="py-2 px-4 border">48</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['MC'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Major Option</th>
                    <td class="py-2 px-4 border">36</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['MO'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Compulsory Breadth</th>
                    <td class="py-2 px-4 border">16</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['CB'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Discovery Year Programme</th>
                    <td class="py-2 px-4 border">32</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['DY'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Remaining Breadth or Option Modules</th>
                    <td class="py-2 px-4 border">8</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown['Other Breadth'] ?? 0 }}</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border">Total</th>
                    <td class="py-2 px-4 border">152</td>
                    <td class="py-2 px-4 border">{{ $mcBreakdown->sum() ?? 0 }}</td>
                </tr>
            </table>
        </div>
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