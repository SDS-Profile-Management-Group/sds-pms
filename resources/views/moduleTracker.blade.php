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

</head>
<body>
    <h1>Module Tracker Table</h1>

    <h3>DC Modules</h3>
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
            @forelse ($records->where('assigned_md_type', 'DC') as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->grade }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Degree Core modules found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <button onclick="toggleForm('dcForm')">Add DC Module</button>

    <div id="dcForm" class="form-container" style="display: none;">
        <form action="{{ route('add-module') }}" method="POST" class="inline-form">
            @csrf
            <input type="hidden" name="module_type" value="DC">
    
            <label for="module_id_dc">Module ID:</label>
            <input type="text" id="module_id_dc" name="module_id" required>
    
            <label for="status_dc">Status:</label>
            <select id="status_dc" name="status" required>
                <option value="" disabled selected>-- Select Status --</option>
                <option value="Completed">Completed</option>
                <option value="In Progress">In Progress</option>
                <option value="Not Started">Not Started</option>
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

    <h3>MC Modules</h3>
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
            @forelse ($records->where('assigned_md_type', 'MC') as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->grade }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Major Core modules found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <button onclick="toggleForm('mcForm')">Add MC Module</button>
    
    <div id="mcForm" class="form-container" style="display: none;">
        <form action="{{ route('add-module') }}" method="POST" class="inline-form">
            @csrf
            <input type="hidden" name="module_type" value="MC">
    
            <label for="module_id_dc">Module ID:</label>
            <input type="text" id="module_id_dc" name="module_id" required>
    
            <label for="status_dc">Status:</label>
            <select id="status_dc" name="status" required>
                <option value="" disabled selected>-- Select Status --</option>
                <option value="Completed">Completed</option>
                <option value="In Progress">In Progress</option>
                <option value="Not Started">Not Started</option>
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


    <h3>Breadth Modules</h3>
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
            @forelse ($records->where('assigned_md_type', 'Breadth') as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->grade }}</td>
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
            <input type="hidden" name="module_type" value="Breadth">
    
            <label for="module_id_dc">Module ID:</label>
            <input type="text" id="module_id_dc" name="module_id" required>
    
            <label for="status_dc">Status:</label>
            <select id="status_dc" name="status" required>
                <option value="" disabled selected>-- Select Status --</option>
                <option value="Completed">Completed</option>
                <option value="In Progress">In Progress</option>
                <option value="Not Started">Not Started</option>
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

    <h3>MO Modules</h3>
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
            @forelse ($records->where('assigned_md_type', 'MO') as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->grade }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Major Options modules found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <button onclick="toggleForm('moForm')">Add MO Module</button>

    <div id="moForm" class="form-container" style="display: none;">
        <form action="{{ route('add-module') }}" method="POST" class="inline-form">
            @csrf
            <input type="hidden" name="module_type" value="MO">
    
            <label for="module_id_dc">Module ID:</label>
            <input type="text" id="module_id_dc" name="module_id" required>
    
            <label for="status_dc">Status:</label>
            <select id="status_dc" name="status" required>
                <option value="" disabled selected>-- Select Status --</option>
                <option value="Completed">Completed</option>
                <option value="In Progress">In Progress</option>
                <option value="Not Started">Not Started</option>
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


</body>
</html>