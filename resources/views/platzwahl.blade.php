<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platzwahl</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('/css/dropdown.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
        <div class="container"><a class="navbar-brand" href="index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
                </form>

                @auth
                    <a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                    {{--<a class="btn btn-light action-button" role="button" href="userProfil.html" style="background-color:#979c9c;">Profil</a>--}}

                    <div class="dropdown">
                        <button class="dropbtn" href="userProfil.html">Profil</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="profilBearbeiten.html">Profil bearbeiten</a>
                        </div>
                    </div>
                    <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest()
                    <a class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                    <a class="btn btn-light action-button" role="button" href="login.html">Login</a>
                @endguest



            </div>
        </div>
    </nav><img src="{{asset('/img/Platzwahl.jpg')}}" style="width:100%;height:auto;">
    <div style="width:992;padding-left:0px;margin-left:0px;padding-right:0px;background-color:#ffffff;margin-top:-35px;padding-top:0px;">
        <div class="container">
            <div class="row" style="margin-top:35px;background-color:#ffffff;border-top:1px solid #348899;">
                <div class="col-md-3">
                    <div class="form-group" style="padding:0px;padding-top:15px;"><label style="padding-top:0px;margin-top:0px;">Kartenanzahl:&nbsp;</label><input type="number" data-bs-hover-animate="pulse" style="width:50px;margin-left:20px;border:1px solid #348899;"></div>
                </div>
            </div>
        </div>
    </div>
    <div style="width:992;padding-left:0px;margin-left:0px;padding-right:0px;background-color:#ffffff;margin-top:-35px;">
        <div class="container">
            <div class="row" style="margin-top:35px;background-color:#ffffff;">
                <div class="col-md-3">
                    <div class="form-group"><label>Block:&nbsp;</label><input type="text" data-bs-hover-animate="pulse" style="width:50px;margin-left:76px;border:1px solid #348899;"></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label>Reihe:&nbsp;</label><input type="text" data-bs-hover-animate="pulse" style="width:50px;margin-left:77px;border:1px solid #348899;"></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label>Platz:&nbsp;</label><input type="text" data-bs-hover-animate="pulse" style="width:50px;margin-left:79px;border:1px solid #348899;"></div>
                </div>
                <div class="col"><a class="btn btn-primary" role="button" href="warenkorb.html" style="margin-left:50px;background-color:#348899;border-radius:20px;">In den Warenkorb</a></div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="margin-top:0px;">
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
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/bs-animation.js")}}"></script>
    <script src="{{asset("assets/js/Media-Slider-Bootstrap-3.js")}}"></script>
    <script src="{{asset("assets/js/Profile-Edit-Form.js")}}"></script>
</body>

</html>