<div id="dc-div" class="bg-white shadow-md rounded-lg p-6 mb-6">
    <h3 class="text-xl font-semibold">Degree Core Modules</h3>
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
                    <td class="py-2 px-4 border">{{ $record->module->module_name ?? 'N/A' }}</td>
                    <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                    <td class="py-2 px-4 border">{{ $record->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>