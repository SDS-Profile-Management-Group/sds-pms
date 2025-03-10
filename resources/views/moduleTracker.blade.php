<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module Tracker - {{ Auth::user()->asg_username }}</title>

    <style>
        .form-container {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            background: #f9f9f9;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        #mc-tally #mc-collection td {
            text-align: right;
        }
    </style>
    <script>
        function toggleForm(id) {
            var el = document.getElementById(id);
            if (el.style.display === "none" || el.style.display === "") {
                el.style.display = "block";
            } else {
                el.style.display = "none";
            }
        }
    </script>
    <script>
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
    
</head>
<body>
    <a href="{{ url('/home') }}">
        <button>Go Home</button>
    </a>

    <h1>Module Tracker Table</h1>

    <div class="infomation">
        <h3>Graduation Requirements</h3>
        <p>Students are required to accumalate a <b>minimum of 152 Modular Credit (MCs)</b> from a combination of degree core, major core, major option and breadth modules 
            as specified in below subsections and in the Programme Structure of the major that the student has chosen to specialize in.
        </p>
        <p>A student must pass with a <b>maximum of 40 Modular Credits (MCs) from Level 1000 modules</b> and a <b>minimum of 24 Modular Credits (MCs) from Level 4000 modules</b> from their major subject.</p>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Requirements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Degree Core (12 MCs)</td>
                    <td>A student <b>must pass all 12 Modular Credits (MCs)</b> of degree core modules as prescribed in the programme structure of the major that the student has chosen to specialize in.</td>
                </tr>
                <tr>
                    <td>Major Core (48 MCs)</td>
                    <td>A student <b>must pass at least 48 Modular Credits (MCs)</b> of major core modules in the major area of study.</td>
                </tr>
                <tr>
                    <td>Major Option (36 MCs)</td>
                    <td>A student <b>must pass all 36 Modular Credits (MCs)</b> of major option modules in the major area of study.</td>
                </tr>
                <tr>
                    <td>TBC</td>
                    <td>TBC</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="mc-tally">
        <h3>Module Credit Breakdown</h3>
        <div id="mc-collection">
            <h4>Overall MC Obtained</h4>
            <table border="1" cellpadding="8" cellspacing="0">
                <tr>
                    <th></th>
                    <th>Required Value</th>
                    <th>Accumalated</th>
                </tr>
                <tr>
                    <th scope="row">Degree Core</th>
                    <td>12</td>
                    <td>{{ $mcBreakdown['DC'] ?? 0 }} <!-- Degree Core --></td>
                </tr>
                <tr>
                    <th scope="row">Major Core</th>
                    <td>48</td>
                    <td>{{ $mcBreakdown['MC'] ?? 0 }}</td> <!-- Major Core -->
                </tr>
                <tr>
                    <th scope="row">Major Option</th>
                    <td>36</td>
                    <td>{{ $mcBreakdown['MO'] ?? 0 }}</td> <!-- Major Option -->
                </tr>
                <tr>
                    <th scope="row">Compulsory Breadth</th>
                    <td>16</td>
                    <td>{{ $mcBreakdown['CB'] ?? 0 }}</td> <!-- Compulsory Breadth -->
                </tr>
                <tr>
                    <th scope="row">Discovery Year Programme</th>
                    <td>32</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Remaining Breadth or Option Modules</th>
                    <td>8</td>
                    <td>{{ $mcBreakdown['Other Breadth'] ?? 0 }}</td> <!-- Remaining Breadth or Option Modules -->
                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td>152</td>
                    <td>{{ $mcBreakdown->sum() ?? 0 }}</td> <!-- Total -->
                </tr>
            </table>
        </div>

        {{-- TODO: Make a tally for Level 1000 and Level 4000 --}}
        <div id="lvl-tally">
            <h4>Level 1000 and 4000 Tally</h4>
            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>Module Level</th>
                        <th>Requirement</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Level 1000</td>
                        <td>lorem</td>
                        <td>(remakrs)</td>
                    </tr>
                    <tr>
                        <td>Level 4000</td>
                        <td>lorem</td>
                        <td>(remakrs)</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <div id="cpbrd-div">
        <span>
            <h3>Compulsary Breadth Modules</h3>
            <p> MCs</p>
        </span>
        
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Module ID</th>
                    <th>Module Name</th>
                    <th>Status</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'CB')->sortBy('module_id') as $record)
                    <tr>
                        <td>{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td>{{ $record->module->module_name }}</td>
                        @else
                            <td>{{'N/A'}}</td>
                        @endif
                        <td>{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td>{{ $record->grade }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Compulsory Breadth modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
        <button onclick="toggleForm('cpbrdForm')">Add Compulsory Breadth Module</button>
    
        <div id="cpbrdForm" class="form-container" style="display: none;">
            <form action="{{ route('add-module') }}" method="POST" class="inline-form">
                @csrf
                <input type="hidden" name="module_type" value="CB">
        
                <label for="module_id_dc">Module ID:</label>
                <input type="text" id="module_id_dc" name="module_id">
        
                <label for="status_dc">Status:</label>
                <select id="status_dc" name="status" required>
                    <option value="" disabled selected>-- Select Status --</option>
                    <option value="1">Taken</option>
                    <option value="0">Not Taken</option>
                </select>
        
                <label for="grade_dc">Grade:</label>
                <select id="grade_dc" name="grade" required>
                    <option value="" disabled selected>-- Select Grade --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
        
                <button type="submit">Submit</button>
                <button type="button" onclick="toggleForm('cpbrdForm')">Cancel</button>
            </form>
        </div>
    </div>
    
    <div id="dc-div">
        <h3>Degree Core Modules</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Module ID</th>
                    <th>Module Name</th>
                    <th>Status</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'DC')->sortBy('module_id') as $record)
                   <tr>
                        <td>{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td>{{ $record->module->module_name }}</td>
                        @else
                            <td>{{ $record->taken_module_name ?? 'N/A' }}</td>
                        @endif
                        <td>{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td>{{ $record->grade }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Degree Core modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <button onclick="toggleForm('dcForm')">Add Degree Core Module</button>

        <div id="dcForm" class="form-container" style="display: none;">
            <form action="{{ route('add-module') }}" method="POST" class="inline-form">
                @csrf
                <input type="hidden" name="module_type" value="DC">
        
                <label for="module_id_dc">Module ID:</label>
                <input type="text" id="module_id_dc" name="module_id" required>
        
                <label for="status_dc">Status:</label>
                <select id="status_dc" name="status" required>
                    <option value="" disabled selected>-- Select Status --</option>
                    <option value="1">Taken</option>
                    <option value="0">Not Taken</option>
                </select>
        
                <label for="grade_dc">Grade:</label>
                <select id="grade_dc" name="grade" required>
                    <option value="" disabled selected>-- Select Grade --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
        
                <button type="submit">Submit</button>
                <button type="button" onclick="toggleForm('dcForm')">Cancel</button>
            </form>
        </div>

    </div>
    
    <div id="mc-div">
        <h3>Major Core Modules</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Module ID</th>
                    <th>Module Name</th>
                    <th>Status</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'MC')->sortBy('module_id') as $record)
                    <tr>
                        <td>{{ $record->module_id }}</td>
                        <td>{{ $record->module->module_name }}</td>
                        <td>{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td>{{ $record->grade }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Major Core modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
        <button onclick="toggleForm('mcForm')">Add Major Core Module</button>
        
        <div id="mcForm" class="form-container" style="display: none;">
            <form action="{{ route('add-module') }}" method="POST" class="inline-form">
                @csrf
                <input type="hidden" name="module_type" value="MC">
        
                <label for="module_id_dc">Module ID:</label>
                <input type="text" id="module_id_dc" name="module_id" required>
        
                <label for="status_dc">Status:</label>
                <select id="status_dc" name="status" required>
                    <option value="" disabled selected>-- Select Status --</option>
                    <option value="1">Taken</option>
                    <option value="0">Not Taken</option>
                </select>
        
                <label for="grade_dc">Grade:</label>
                <select id="grade_dc" name="grade" required>
                    <option value="" disabled selected>-- Select Grade --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
        
                <button type="submit">Submit</button>
                <button type="button" onclick="toggleForm('mcForm')">Cancel</button>
            </form>
        </div>
    </div>

    <div id="brd-div">
        <h3>Breadth Modules</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Module ID</th>
                    <th>Module Name</th>
                    <th>Status</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'Other Breadth')->sortBy('module_id') as $record)
                    <tr>
                        <td>{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td>{{ $record->module->module_name }}</td>
                        @else
                            <td>{{'N/A'}}</td>
                        @endif
                        <td>{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td>{{ $record->grade }}</td>
                        <td><button>Edit</button> <button>Delete</button></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Breadth modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
        <button onclick="toggleForm('breadthForm')">Add Breadth Module</button>
    
        <div id="breadthForm" class="form-container" style="display: none;">
            <form action="{{ route('add-module') }}" method="POST" class="inline-form">
                @csrf
                <input type="hidden" name="module_type" value="Other Breadth">
        
                <label for="module_id_dc">Module ID:</label>
                <input type="text" id="module_id_dc" name="module_id" required oninput="fetchModuleName()">
        
                <label for="module_name_dc">Module Name:</label>
                <input type="text" id="module_name_dc" name="taken_module_name" placeholder="Enter module name if not found">
        
                <label for="status_dc">Status:</label>
                <select id="status_dc" name="status" required>
                    <option value="" disabled selected>-- Select Status --</option>
                    <option value="1">Taken</option>
                    <option value="0">Not Taken</option>
                </select>
        
                <label for="grade_dc">Grade:</label>
                <select id="grade_dc" name="grade" required>
                    <option value="" disabled selected>-- Select Grade --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
        
                <button type="submit">Submit</button>
                <button type="button" onclick="toggleForm('breadthForm')">Cancel</button>
            </form>
        </div>
    </div>

    <div id="mo-div">
        <h3>Major Option Modules</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Module ID</th>
                    <th>Module Name</th>
                    <th>Status</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records->where('assigned_md_type', 'MO')->sortBy('module_id') as $record)
                    <tr>
                        <td>{{ $record->module_id }}</td>
                        @if ($record->module)
                            <td>{{ $record->module->module_name }}</td>
                        @else
                            <td>{{ $record->taken_module_name ?? 'N/A' }}</td>
                        @endif
                        <td>{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                        <td>{{ $record->grade }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No Major Options modules found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <button onclick="toggleForm('moForm')">Add Major Option Module</button>

        <div id="moForm" class="form-container" style="display: none;">
            <form action="{{ route('add-module') }}" method="POST" class="inline-form">
                @csrf
                <input type="hidden" name="module_type" value="MO">
        
                <label for="module_id_dc">Module ID:</label>
                <input type="text" id="module_id_dc" name="module_id" required>
        
                <label for="status_dc">Status:</label>
                <select id="status_dc" name="status" required>
                    <option value="" disabled selected>-- Select Status --</option>
                    <option value="1">Taken</option>
                    <option value="0 Taken">Not Taken</option>
                </select>
        
                <label for="grade_dc">Grade:</label>
                <select id="grade_dc" name="grade" required>
                    <option value="" disabled selected>-- Select Grade --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
        
                <button type="submit">Submit</button>
                <button type="button" onclick="toggleForm('moForm')">Cancel</button>
            </form>
        </div>
    </div>


</body>
</html>