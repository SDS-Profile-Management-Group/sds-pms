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
            @foreach ($records->where('assigned_md_type', 'MC')->sortBy('module_id') as $record)
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