<div id="{{ $id }}-div" class="bg-white shadow-md rounded-lg p-6 mb-6 module-div">
    <span>
        <h3 class="text-xl font-semibold">{{ $title }}</h3>
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
            @forelse ($records->where('assigned_md_type', $type)->sortBy('module_id') as $record)
                <tr data-module-id="{{ $record->module_id }}" 
                    data-status="{{ $record->status }}" 
                    data-grade="{{ $record->grade }}"
                    data-update-url="{{ route('modules.update', $record->module_id) }}"
                    class="cursor-pointer hover:bg-gray-100 select-row module-div">
                    <td class="py-2 px-4 border">{{ $record->module_id }}</td>
                    @if ($record->module)
                        <td class="py-2 px-4 border">{{ $record->module->module_name }}</td>
                    @else
                        <td class="py-2 px-4 border">{{ 'N/A' }}</td>
                    @endif
                    <td class="py-2 px-4 border">{{ $record->status == 1 ? 'Taken' : 'Not Taken' }}</td>
                    <td class="py-2 px-4 border">{{ $record->grade }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-2 px-4 border text-center">{{ $emptyMessage }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="{{ asset('js/tracker/select-row.js') }}"></script>