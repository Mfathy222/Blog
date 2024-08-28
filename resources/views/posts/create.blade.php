<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Create post</title>
</head>

<body>
    <h4>Create Post</h4>
    <form action="{{url("posts.store") }}" method="post">
        @csrf
        <input type="text" name="title" id=""> <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">Create Post</button><br>


    </form> 

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
