<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post Form</h1>
    <form action="{{route('post.save')}}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">

        <label for="title">Author:</label>
        <input type="text" id="author" name="author">
        <button type="submit">Create post</button>

    </form>
</body>
</html>