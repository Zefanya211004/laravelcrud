<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    @auth
    <h1>You are logged in</h1>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>

    <h2>Create a New Post</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="post title">
        <textarea name="body" placeholder="body content..."></textarea>
        <button>Save Post</button>
    </form>

    {{-- <h2>Upload file</h2>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="descriptionFile" placeholder="file description">
        <input type="file" name="file">
        <button>
            Upload File
        </button>
    </form> --}}

    <h2>All Post</h2>
    @foreach($posts as $post)
        <div style="background-color:beige; padding: 10px; margin: 10px">
            <h3>{{ $post['title'] }} by {{ $post->user->name }}</h3>
            <h4>{{ $post->created_at->diffForHumans() }}</h4>
            {{ $post['body'] }}
            <p>
                <a href="/edit-post/{{ $post->id }}">Edit</a>
            </p>
            <form action="/delete-post/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    @endforeach

    @else
    <h2 class="register">Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
    </form>
    <h2 class="login">Login</h2>
    <form action="/login" method="POST">
        @csrf
        <input name="loginname" type="text" placeholder="name">
        <input name="loginpassword" type="password" placeholder="password">
        <button>Login</button>
    @endauth
    
</body>
</html>