<!DOCTYPE html>
<html>
<head>
    <title>New Comment Notification</title>
</head>
<body>
    <h1> Hello From Blog-App</h1>
    <h3>New Post And Comment Added</h3>
    <h3>name: {{ $post->user->name }}</h3>
    <h4>NewPost:{{ $post->title }}</h4>
    <p>Content: {{ $post->content }}</p>
    <h1>New Comment on Your Post: {{ $post->title }}</h1>
    <p>{{ $comment->content }}</p>
    <p>Commented by: {{ $comment->user->name }}</p>
</body>
</html>