<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abweichende Rechnungsadresse</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Carousel-Hero.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css")}}">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('/fonts/fontNFL.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dropdown.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
        <div class="container"><a class="navbar-brand" href="test.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
                </form><a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url(&quot;assets/img/Warenkorb.png&quot;);background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                <a
                    class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="logIn.html">Login</a></div>
        </div>
    </nav>
    <p class="lead text-center text-white" style="font-size:2em;">ABWEICHENDE RECHNUNGSADRESSE</p>
    <div class="container profile profile-view" id="profile">
        <form>
            <div class="form-row profile-row">
                <div class="col-md-8">
                    <h1 style="color:rgb(255,255,255);">Rechnung an:</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Vorname</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Nachname</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Geburtsdatum</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Telefonnummer</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Straße</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Hausnummer</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Postleitzahl</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Stadt</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Land</label><input class="form-control" type="text" data-bs-hover-animate="pulse" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-group"><label style="color:rgb(255,255,255);">Email </label><input class="form-control" type="email" data-bs-hover-animate="pulse" autocomplete="off" required="" name="email" style="border:1px solid #348899;border-radius:40px;"></div>
                    <div
                        class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Password </label><input class="form-control" type="password" data-bs-hover-animate="pulse" name="password" autocomplete="off" required="" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Confirm Password</label><input class="form-control" type="password" data-bs-hover-animate="pulse" name="confirmpass" autocomplete="off" required="" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-12 content-right"><a class="btn btn-primary form-btn" role="button" href="bezahlmethode.html" type="submit" style="background-color:#348899;border:1px solid #348899;border-radius:40px;">Weiter</a><a class="btn btn-danger form-btn" role="button" href="rechnungsauswahl.html"
                            type="reset" style="background-color:#979c9c;border:1px solid #7a243a;border-radius:40px;">Back</a></div>
                </div>
            </div>
    </div>
    </form>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Media-Slider-Bootstrap-3.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>