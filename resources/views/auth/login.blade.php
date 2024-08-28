
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/LineIcons.3.0.css')}}" />
<link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
<link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/main.css')}}" />

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
                            <ul class="user-login">
                                <li>
                                    <a href="login">LogIn</a>
                                </li>
                                <li>
                                    <a href="register">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->


    <!-- Start Account Register Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>No Account? Register</h3>
                            <p>Registration takes less than a minute but gives you full control over your orders.</p>
                        </div>
                        <form action="{{url('login')}}" method="POST">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>E-mail Address</label>
                                     <input type="email" name="email"  id="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                   <input type="password" name="password"  id="" class="form-control" >
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">login</button>
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Account Register Area -->

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/glightbox.min.js')}}"></script>
    {{-- <script src="{{asset('js/main.js')}}"></script> --}}
</body>

</html>