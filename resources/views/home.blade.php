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
        <p>Name: <span class="info">{{ Auth::user()->userProfile->full_name }}</span></p>
        <p>Age: <span class="info"></span></p>
        <p>Contact Number: <span class="info"></span></p>
        <p>Alternative Email Address: <span class="info"></span></p>
        {{-- TODO: Add more details in the future --}}
    </div>

    <div class="modules">
        <div id="degree-core">

        </div>

        <div id="major-core">

        </div>

        <div id="major-option">

        </div>

        <div id="breadth-modules">

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
</body>
</html>