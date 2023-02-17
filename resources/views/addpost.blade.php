<html>
    <head></head>
    <body>
        <h1>Form</h1>
        <form method="post" action="{{ route('createpost') }}">
            @csrf
            <input type="text" placeholder="Enter your post" name="post"></input>
            <button type="submit">Add New Post</button>
        </form>
    </body>
</html>