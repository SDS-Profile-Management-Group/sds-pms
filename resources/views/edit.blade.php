<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    @auth
    <form action="/enter-details" method="POST">
        @csrf
        <p>
            <label for="full_name">Enter your name:</label>
            <input type="text" name="full_name" id="full_name" value="{{ Auth::user()->userProfile->full_name ?? '' }}">
        </p>
        <p>
            <label for="dob">Enter your date of birth:</label>
            <input type="date" name="dob" id="dob" value="{{ Auth::user()->userProfile->dob ?? '' }}">
        </p>
        <p>
            <label for="contact_number">Enter your contact number:</label>
            <input type="tel" name="contact_number" id="contact_number" value="{{ Auth::user()->userProfile->contact_number ?? '' }}">
        </p>
        <p>
            <label for="alt_email">Enter your alternate email:</label>
            <input type="text" name="alt_email" id="alt_email" value="{{ Auth::user()->userProfile->alt_email ?? '' }}">
        </p>
        <button type="submit">Save Changes</button>
    </form>
    @endauth
</body>
</html>