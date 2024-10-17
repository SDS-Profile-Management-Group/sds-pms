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
        <p>Welcome, {{ Auth::user()->userProfile->full_name }}!</p>
    @else
        {{-- TODO: Establish username as input! --}}
        {{-- <p>Welcome, {{ Auth::user()->userProfile->username }}!</p> --}}
        <p>Welcome, {{ Auth::user()->username }}!</p>
    @endif

    <form action="/enter-name" method="POST">
        @csrf
        <p>Enter your name: </p>
        <input type="text" name="full_name" id="full_name">
        <button>Enter name</button>
    </form>

    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    @endauth

    
</body>
</html>