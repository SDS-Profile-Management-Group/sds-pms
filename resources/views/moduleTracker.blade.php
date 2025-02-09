<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module Tracker - {{ Auth::user()->asg_username }}</title>
</head>
<body>
    <h2>Module Tracker Table</h2>

    <form action="{{ route('add-module') }}" method="POST">
        @csrf
        <label for="module_id">Module ID:</label>
        <input type="text" name="module_id" required><br>

        <label for="module_type">Module Type:</label>
        <select name="module_type" required>
            <option value="" disabled selected>-- Select Module Type --</option>
            <option value="DC">DC</option>
            <option value="MC">MC</option>
            <option value="MO">MO</option>
            <option value="Breadth">Breadth</option>
        </select><br>

        <label for="status">Status:</label>
        {{-- <input type="text" name="status"><br> --}}
        <select name="status" required>
            <option value="" disabled selected>-- Select Status --</option>
            <option value="Completed">Completed</option>
            <option value="In Progress">In Progress</option>
            <option value="Not Started">Not Started</option>
        </select>

        <label for="grade">Grade:</label>
        {{-- <input type="string" name="grade"><br> --}}
        <select name="grade" required>
            <option value="" disabled selected>-- Select Grade --</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
        </select>

        <button type="submit">Add Module</button>
    </form>

    <!-- Module Tracker Table -->
    {{-- <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Module ID</th>
                <th>Module Name</th>
                <th>Status</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->grade }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No modules found.</td>
                </tr>
            @endforelse
        </tbody>
    </table> --}}

    {{-- Table for DC --}}
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

    {{-- Table for MC --}}
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

    {{-- Table for Breadth --}}
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

    {{-- Table for MO --}}
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
</body>
</html>