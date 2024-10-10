<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    @auth

    <p>Congrats, you are logged in!</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    <div style="border: 3px solid black">
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Post title">
            <textarea name="body" placeholder="Body Content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>

    {{-- <div style="border: 3px solid black">
        <h2>All posts</h2>
        @foreach ($posts as $post)
            <div style="background-color: gray; padding: 10px; margin:10px">
                <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                {{$post['body']}}
                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                <form action="/delete-post" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div> --}}

    @else
    <div style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="username" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="text" name="user_id" placeholder="21B6027">
            <label for="userType">Choose User Type:</label>
            <select id="userType" name="user_type">
                <option value="student">Student</option>
                <option value="staff">Staff</option>
            </select>
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="login-name" placeholder="name">
            <input type="password" name="login-password" placeholder="password">
            <button>Log In</button>
        </form>
    </div>
    
    @endauth

    
</body>
</html>