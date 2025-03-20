@extends('layouts.app')

@section('title', 'Module Tracker - ' . Auth::user()->asg_username)

@section('scripts')
    <script src="{{ asset('js/tracker/module-tracker.js') }}"></script>
@endsection

@section('navbar_type', 'mt')

@section('content')
    <h1 class="text-3xl font-semibold my-4">Module Tracker Table</h1>

    <div class="flex flex-col md:flex-row gap-6">
        <div class="bg-white shadow-md rounded-lg p-6 mb-6 md:w-1/2">
            <h3 class="text-xl font-bold mb-2 cursor-pointer" id="graduation-toggle">Graduation Requirements</h3>
            <div id="graduation-content" class="mt-4" >
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

    <div class="flex justify-center gap-4 mt-4">
        <button id="add-record-btn" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
            Add Record
        </button>
        {{-- <button id="edit-record-btn" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">
            Edit Record
        </button> --}}
    </div>

    <div id="record-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 id="modal-title" class="text-xl font-bold mb-4">Add Record</h2>
    
            <form id="record-form" method="POST" action="{{ route('modules.store') }}" data-action="{{ route('modules.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="module_id" class="block text-gray-700">Module ID:</label>
                    <input type="text" id="module_id" name="module_id" class="w-full border p-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="module_name" class="block text-gray-700">Module Name:</label>
                    <input type="text" id="module_name" name="module_name" class="w-full border p-2 rounded bg-gray-100" readonly>
                </div>
    
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 font-semibold">Status:</label>
                    <select name="status" id="status" required class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-center italic">
                        {{-- <option value="" disabled selected>Select Status</option> --}}
                        <option value="1">Taken</option>
                        <option value="0">Not Taken</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="grade" class="block text-gray-700 font-semibold">Grade:</label>
                    <select id="grade" name="grade" required class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-center italic">
                        {{-- <option value="" disabled selected>Select Grade</option> --}}
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                    </select>
                </div>
    
                <div class="flex justify-end gap-2">
                    <button type="button" id="close-modal-btn" class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">
                        Cancel
                    </button>
                    <button type="submit" id="save-record-btn" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Compulsory Breadth Modules -->
    @include('partials._module_table', [
        'id' => 'cpbrd', 
        'title' => 'Compulsory Breadth Modules', 
        'records' => $records, 
        'type' => 'CB'
    ])

    @include('partials._module_table', [
        'id' => 'dc', 
        'title' => 'Degree Core Modules', 
        'records' => $records, 
        'type' => 'DC'
    ])

    @include('partials._module_table', [
        'id' => 'mc', 
        'title' => 'Major Core Modules', 
        'records' => $records, 
        'type' => 'MC'
    ])

    @include('partials._module_table', [
        'id' => 'mo', 
        'title' => 'Major Option Modules', 
        'records' => $records, 
        'type' => 'MO'
    ])


    @include('partials._module_table', [
        'id' => 'obrd', 
        'title' => 'Other Breadth Modules', 
        'records' => $records, 
        'type' => 'OB'
    ])

    @include('partials._module_table', [
        'id' => 'dy', 
        'title' => 'Discovery Modules', 
        'records' => $records, 
        'type' => 'DY'
    ])


@endsection