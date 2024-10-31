<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <h3>Degree Core Modules</h3>
            <table id="degree-core-table">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Credits</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here -->
                </tbody>
            </table>
            <button onclick="addRow('degree-core-table')">Add Module</button>
        </div>
    
        <div id="major-core">
            <h3>Major Core Modules</h3>
            <table id="major-core-table">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Credits</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here -->
                </tbody>
            </table>
            <button onclick="addRow('major-core-table')">Add Module</button>
        </div>
    
        <div id="major-option">
            <h3>Major Option Modules</h3>
            <table id="major-option-table">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Credits</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here -->
                </tbody>
            </table>
            <button onclick="addRow('major-option-table')">Add Module</button>
        </div>
    
        <div id="breadth-modules">
            <h3>Breadth Modules</h3>
            <table id="breadth-modules-table">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Credits</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be added here -->
                </tbody>
            </table>
            <button onclick="addRow('breadth-modules-table')">Add Module</button>
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

    <script>
        function addRow(tableId) {
            const tableBody = document.querySelector(`#${tableId} tbody`);
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="text" placeholder="Module Name"></td>
                <td><input type="number" placeholder="Credits"></td>
                <td><button onclick="removeRow(this)">Remove</button></td>
            `;
            tableBody.appendChild(newRow);
        }
    
        function removeRow(button) {
            const row = button.parentElement.parentElement;
            row.remove();
        }
    </script>
</body>
</html>