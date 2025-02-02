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
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Module ID</th>
                <th>Module Name</th>
                <th>Status</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($records as $record)
                <tr>
                    <td>{{ $record->module_id }}</td>
                    <td>{{ $record->module_name }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->semester }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No modules found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>