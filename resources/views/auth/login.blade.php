<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEITQEY_V5.0</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
    <div class="container"><a class="navbar-brand" href="index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                                                                                                                                                                                                                                           data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="404.html">Genre</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="404.html">Location</a></li>
            </ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
            </form><a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
            <a
                    class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="logIn.html">Login</a></div>
    </div>
</nav>
<div class="login-dark" style="background-color:#343642;background-image:url({{asset('/img/Konzertsaal.jpg')}});">
    <form method="post" style="padding-bottom:40px;" action="http://localhost:8000/login">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration" style="height:225px;"><img src="{{asset('/img/Logo.png')}}" style="background-size:auto;background-repeat:no-repeat;background-position:none;width:220px;"></div>
        <div class="form-group"><input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" data-bs-hover-animate="pulse" style="border:1px solid #348899;border-radius:20px;" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group"><input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="Password" data-bs-hover-animate="pulse" style="border:1px solid #348899;border-radius:20px;" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-check"><input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="formCheck-1"><label class="form-check-label" for="formCheck-1">Remember Me</label></div>
        <div class="form-group"><a class="btn btn-primary btn-block" type="submit" role="button" href="userProfl.html" style="background-color:#348899;border-radius:20px;">{{ __('Login') }}</a></div><a href="{{ route('password.request') }}" class="forgot">{{ __('Forgot Your Password?') }}</a></form>
</div>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="http://www.instagram.com"><i class="icon ion-social-instagram"></i></a><a href="http://www.snapchat.de"><i class="icon ion-social-snapchat"></i></a><a href="http://www.twitter.de"><i class="icon ion-social-twitter"></i></a><a href="http://www.facebook.de"><i class="icon ion-social-facebook"></i></a></div>
        <ul
                class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">NEITQEY © 2018</p>
    </footer>
</div>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/bs-animation.js')}}"></script>
</body>

</html>