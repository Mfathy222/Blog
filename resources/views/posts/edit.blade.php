<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Edit Post</title>
</head>

<body>
    <h4>Edit Post</h4>
    <form action="{{url("posts/$post->id") }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="title" value="{{$post->title}}"> <br>
        <input type="text" name="content"  value="{{$post->content}}"> <br>
        <input type="text" name="comments"  value="{{$post->comments}}"> <br>
        <button  class="btn-green"  type="submit">Edit Post</button><br>


    </form> 

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
