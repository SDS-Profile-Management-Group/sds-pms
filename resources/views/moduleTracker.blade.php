@extends('layouts.app')

@section('title', 'Module Tracker - ' . Auth::user()->asg_username)

{{-- @section('scripts')
    <script>
        // Toggle form visibility
        function toggleForm(id) {
            var el = document.getElementById(id);
            if (el.style.display === "none" || el.style.display === "") {
                el.style.display = "block";
            } else {
                el.style.display = "none";
            }
        }

        // Fetch module name based on the module ID
        function fetchModuleName() {
            let moduleId = document.getElementById("module_id_dc").value;
            let moduleNameInput = document.getElementById("module_name_dc");

            if (moduleId.length > 2) { // Fetch only if at least 3 characters are typed
                fetch(`/get-module-name/${moduleId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.module_name) {
                            moduleNameInput.value = data.module_name;
                            moduleNameInput.readOnly = true; // Lock input if found
                        } else {
                            moduleNameInput.value = "N/A";  // Show 'N/A' if no module found
                            moduleNameInput.readOnly = false; // Allow manual entry
                        }
                    })
                    .catch(error => {
                        console.error("Error fetching module name:", error);
                        moduleNameInput.value = "Error"; // Show error message if fetch fails
                        moduleNameInput.readOnly = false; // Allow manual entry in case of error
                    });
            } else {
                moduleNameInput.value = "";
                moduleNameInput.readOnly = false;
            }
        }
    </script>
@endsection --}}

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
                    <td class="py-2 px-4 border"></td>
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

    <!-- Degree Core Modules -->
    <div id="dc-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <span>
            <h3 class="text-xl font-semibold">Degree Core Modules</h3>
        </span>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Module ID</th>
                    <th class="py-2 px-4 border">Module Name</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records->where('assigned_md_type', 'DC') as $record)
                    <tr>
                        <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                        @else
                            <td class="py-2 px-4 border">{{'N/A'}}</td>
                        @endif
                        <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td class="py-2 px-4 border">{{ $record->grade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Compulsory Breadth Modules -->
    <div id="cpbrd-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <span>
            <h3 class="text-xl font-semibold">Compulsory Breadth Modules</h3>
        </span>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Module ID</th>
                    <th class="py-2 px-4 border">Module Name</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Grade</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'CB')->sortBy('module_id') as $record)
                    <tr>
                        <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                        @else
                            <td class="py-2 px-4 border">{{'N/A'}}</td>
                        @endif
                        <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td class="py-2 px-4 border">{{ $record->grade }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-2 px-4 border">No Compulsory Breadth modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Major Core Modules -->
    <div id="mc-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <span>
            <h3 class="text-xl font-semibold">Major Core Modules</h3>
        </span>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Module ID</th>
                    <th class="py-2 px-4 border">Module Name</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records->where('assigned_md_type', 'MC') as $record)
                    <tr>
                        <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                        @else
                            <td class="py-2 px-4 border">{{'N/A'}}</td>
                        @endif
                        <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td class="py-2 px-4 border">{{ $record->grade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Major Option Modules -->
    <div id="mo-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <span>
            <h3 class="text-xl font-semibold">Major Option Modules</h3>
        </span>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Module ID</th>
                    <th class="py-2 px-4 border">Module Name</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records->where('assigned_md_type', 'MO') as $record)
                    <tr>
                        <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                        @else
                            <td class="py-2 px-4 border">{{'N/A'}}</td>
                        @endif
                        <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td class="py-2 px-4 border">{{ $record->grade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Other Breadth Modules -->
    <div id="obrd-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
        <span>
            <h3 class="text-xl font-semibold">Other Breadth Modules</h3>
        </span>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Module ID</th>
                    <th class="py-2 px-4 border">Module Name</th>
                    <th class="py-2 px-4 border">Status</th>
                    <th class="py-2 px-4 border">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records->where('assigned_md_type', 'OB') as $record)
                    <tr>
                        <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                        @else
                            <td class="py-2 px-4 border">{{'N/A'}}</td>
                        @endif
                        <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td class="py-2 px-4 border">{{ $record->grade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection