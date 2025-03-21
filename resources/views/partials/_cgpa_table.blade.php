<div id="cgpa-div" class="bg-white shadow-md rounded-lg p-6 mb-6 module-div">
    <h3 class="text-xl font-semibold">CGPA Obtained</h3>

    <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border">Semester</th>
                <th class="py-2 px-4 border">CGPA</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($cgpaData))
                @foreach ($cgpaData as $semester => $cgpa)
                    <tr>
                        <td class="py-2 px-4 border">{{ $semester }}</td>
                        <td class="py-2 px-4 border">{{ $cgpa }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="2" class="py-2 px-4 border text-center">No CGPA data available</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>