<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    @auth

    @if (Auth::user()->userProfile)
        @if (Auth::user()->userProfile->full_name)
            <p>Welcome, {{ Auth::user()->userProfile->full_name }}!</p>
        @else
            <p>Welcome, {{ Auth::user()->asg_username }}!</p>
        @endif
    @endif
    <div class="short-bio">
        
        <p id="full-name">Name: {{Auth::user()->userProfile->full_name}}</p>
        <p id="age">Age: </p>
        <p id="cont-no">Contact Number: </p>
        <p id="alt-email">Alternative Email Address: </p>
        
    </div>

    <form action="/enter-name" method="POST">
        @csrf
        <p>Enter your name: <input type="text" name="full_name" id="full_name"></p>
        <p>Enter your date of birth: <input type="text" name="dob" id="dob"></p>
        <p>Enter your contact number: <input type="number" name="contact_no" id="contact_no"></p>
        <p>Enter your alternate email: <input type="text" name="alt_email" id="alt_email"></p>
        <button>Enter name</button>
    </form>

    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    @endauth

    
</body>
</html>