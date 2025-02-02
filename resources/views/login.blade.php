<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Management System - Login</title>
</head>
<body>
    <header>Header</header>

    <div class="auth-box" style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf

            <input type="text" name="asg_username" placeholder="Username">
            {{-- <input type="text" name="email" placeholder="UBD Assigned Email"> --}}
            <input type="password" name="password" placeholder="Password">
            <label for="userType">Choose User Type:</label>

            <select id="userType" name="user_type">
                <option value="student">Student</option>
                <option value="staff">Staff</option>
            </select>

            <button>Register</button>
        </form>
    </div>

    <div class="auth-box" style="border: 3px solid black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf

            <input type="text" name="login-name" placeholder="name">
            <input type="password" name="login-password" placeholder="password">

            <button>Log In</button>
        </form>
    </div>

    <footer>Footer</footer>
</body>
</html>