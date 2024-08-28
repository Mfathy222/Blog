<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blog</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

</head>

<body>
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello 
                            </div>
                            

                            @guest
                                <ul class="user-login">
                                    <li>
                                        <a href="{{ url('login') }}">login</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('register') }}">Register</a>
                                    </li>
                                </ul>
                            @endguest
                            @auth
                            <ul class="user-login">
                                    <li>
                                        <form action="{{ url('logout') }}" method="post">
                                            @csrf
                                            <button type="submit"  class="btn-primary mx-5 " >logout</button>
                                        </form>
                                    </li>
                                </ul>
                                @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" container m-auto text-center ">
            <h1>All Posts</h1>
        </div>
        @if (Auth::check())
            <div class="col-lg-4 col-md-4 col-12">
                <div>
                    <a href="{{ url('posts/create') }}" class="btn mx-5 btn-primary">Create New Post</a>
                </div>
            </div>
        @endif


        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-4 mx-0">
                        <div class="p-5 m-0">
                            <h5> Auther Name :{{ $post->user->name }} </h5>
                            <h6>Title :{{ $post->title }}</h6>
                            <div style="max-width: 10px">
                                <h6>Post: {{ $post->content }}</h6>
                            </div>
                            @foreach ($post->comments as $comment)
                            <div style="max-width: 10px">
                                <h6>Comments: {{ $comment->content}}</h6>
                            </div>
                            @endforeach
                            <div>
                                <form action="{{ route('comments.store',$post->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <textarea name="content" class="fs-6 form-control"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-sm"> Post Comment</button>
                                    </div>
                                </form>

                                @auth
                                    
                                <form action="{{ url("posts/$post->id") }}" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm"> Delete Post</button>
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="{{ url("posts/edit/$post->id") }}">
                                    <button type="submit" class="btn btn-green btn-sm"> Edit Post</button>
                                </a>
                                @endauth


                            </div>

                        </div>


                    </div>
                @endforeach
            </div>
        </div>






        <!-- End Single Blog -->





        <!-- ========================= JS here ========================= -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/tiny-slider.js') }}"></script>
        <script src="{{ asset('js/glightbox.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

</html>
