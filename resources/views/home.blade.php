<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Homepage - {{ Auth::user()->asg_username }}</title>

    <style>
        .btn {
            display: inline-block; /* Makes it behave like a button */
            padding: 10px 20px;   /* Add padding */
            background-color: gray; /* Button background color */
            color: white;          /* Text color */
            text-decoration: none;  /* Remove underline */
            border-radius: 5px;    /* Rounded corners */
        }
    </style>
    
</head>
<body>
    @auth

    <div class="welcome-sect">
        @if (Auth::user()->userProfile)
            @if (Auth::user()->userProfile->full_name)
                <h1>Welcome, <span class="headerID">{{ Auth::user()->userProfile->full_name }}</span>!</h1>
            @else
                <p>Welcome, <span class="headerID">{{ Auth::user()->asg_username }}</span>!</p>
            @endif
        @endif
    </div>

    <div class="short-bio">
        <h3>Biography</h3>
        <p>Name: <span class="info">{{ Auth::user()->userProfile->full_name }}</span></p>
        <p>Age: <span class="info"></span></p>
        <p>Contact Number: <span class="info"></span></p>
        <p>Alternative Email Address: <span class="info"></span></p>
        {{-- TODO: Add more details in the future --}}
    </div>

    <div class="modules">
        <div id="degree-core">
            <table>
                <thead>
                    <tr>
                        <th>Module Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="module_code[]" placeholder="Module Code"></td>
                        <td><button type="button" onclick="removeRow(this)">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" onclick="addRow('degree-core')">Add Row</button>
            <button id="save-modules">Save Modules</button>
        </div>
    </div>

    <div class="buttons">
        <a href="{{ route('edit-details') }}" class="btn">Edit Details</a>

        <form action="/logout" method="POST">
            @csrf
            <button class="btn">Log out</button>
        </form>
    </div>

    @endauth

    {{-- <script>
        function addRow(tableId) {
            const tableBody = document.querySelector(`#${tableId} tbody`);
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="text" name="module_name[]" placeholder="Module Name"></td>
                <td><input type="number" name="credits[]" placeholder="Credits"></td>
                <td><button type="button" onclick="removeRow(this)">Remove</button></td>
            `;
            tableBody.appendChild(newRow);
        }
    
        function removeRow(button) {
            const row = button.parentElement.parentElement;
            row.remove();
        }
    
        document.getElementById('save-modules').addEventListener('click', function() {
            const moduleNames = Array.from(document.querySelectorAll('input[name="module_name[]"]')).map(input => input.value);
            const credits = Array.from(document.querySelectorAll('input[name="credits[]"]')).map(input => input.value);
    
            const data = {
                student_id: '{{ Auth::user()->student_username }}', // Replace with actual user ID
                modules_taken: moduleNames.map((module, index) => ({
                    module_name: module,
                    credits: credits[index]
                })),
            };
    
            fetch('/save-modules', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Modules saved successfully!');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    </script> --}}
    <script>
        const studentId = '{{ Auth::user()->student_username }}';
    </script>

    <script src="{{ asset('js/modules.js') }}"></script>
</body>
</html>