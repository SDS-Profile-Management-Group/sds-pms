<div class="flex justify-center gap-4 mt-4">
    <button id="add-record-btn" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
        Add Record
    </button>
</div>
        
@php
    $routeName = match($modalType) {
        'cgpa' => 'cgpa.store',
        'module_tracker' => 'modules.store',
        'profile' => 'profile.edit',
        // default => 'default.route',
    };

    $headName = match($modalType) {
        'cgpa' => 'CGPA Information',
        'module_tracker' => 'Module Information',
        'profile' => 'Profile Information',
        default => 'Default Information',
    };
@endphp

<div id="record-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 id="modal-title" class="text-xl font-bold mb-4">Add Record - {{$headName}}</h2>

        <form id="record-form" method="POST" action="{{ route($routeName) }}" data-action="{{ route($routeName) }}">
            @csrf
            @if($modalType === 'cgpa')
                <div class="mb-4">
                    <label for="semester" class="block text-gray-700">Semester:</label>
                    <select id="semester" name="semester" class="w-full border p-2 rounded" required>
                        @php
                            $existingSemesters = array_keys($cgpaData ?? []);
                            $nextSemester = count($existingSemesters) + 1;
                        @endphp

                        @if(empty($existingSemesters))
                            <option value="Semester 1">Semester 1</option>
                        @else
                            @foreach($existingSemesters as $semester)
                                <option value="{{ $semester }}">{{ $semester }}</option>
                            @endforeach
                            <option value="Semester {{ $nextSemester }}">Semester {{ $nextSemester }}</option>
                        @endif
                    </select>
                </div>

                <div class="mb-4">
                    <label for="cgpa_obt" class="block text-gray-700">CGPA Obtained:</label>
                    <input type="number" id="cgpa_obt" name="cgpa_obt" step="0.01" min="0.00" max="4.00" class="w-full border p-2 rounded" required>
                </div>

            @elseif($modalType === 'module_tracker')
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
                        <option value="2">Currently Taking</option>
                        <option value="1">Taken</option>
                        <option value="0">Not Taken</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="grade" class="block text-gray-700 font-semibold">Grade:</label>
                    <select id="grade" name="grade" required class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-center italic">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                    </select>
                </div>
            
            @elseif($modalType === 'profile')

            @endif
            
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