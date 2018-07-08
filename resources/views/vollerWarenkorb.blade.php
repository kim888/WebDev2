<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb</title>
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


    <style>
        p, h3{
            font-family: 'Bougan SSi';
            font-size: 3em;
        }


        .ueber{
            font-family: 'NFLCHARG';
            font-weight:600;
            font-size:3em;
        }


    </style>
</head>

<body>
@csrf
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


                @auth
                    <a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>


                    <div class="dropdown1">
                        <div class="dropbtn1">
                            <a href="userProfil.html" style="text-decoration:none; color: white;">Profil</a>
                        </div>
                        <div id="myDropdown" class="dropdown-content1">
                            <a href="profilBearbeiten.html">Profil bearbeiten</a>
                        </div>
                    </div>
                    <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest()
                    <a class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                    <a class="btn btn-light action-button" role="button" href="login.html">Login</a>
                @endguest




                {{--
                     <div class="btn-group"><button id="profil" class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;">Profil</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                            type="button" style="background-color:#348899;border-radius:40px;"></button>
                        <div class="dropdown-menu" role="menu" style="background-color:#979c9c;border-radius:40px;"><a class="dropdown-item" role="presentation" href="profilBearbeiten.html" data-bs-hover-animate="pulse" style="color:#348899;border-radius:60px;">Profil bearbeiten</a><a class="dropdown-item" role="presentation" href="index.html"
                                data-bs-hover-animate="pulse" style="color:#7a243a;border-radius:60px;">Logout</a></div>
                    </div>

                --}}

            </form>
        </div>
    </div>
</nav>    <p class="lead text-center text-white" style="font-family: 'NFLCHARG';font-weight:600;font-size:3em;" >WARENKORB</p>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="{{asset('/img/dbImages/artists/Eminem.jpg')}}" style="width:150px;padding:16px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px;"></div>


                <div class="col-md-3">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="border-radius:20px;background-color:#348899;margin-left:40px;margin-top:50px;">Bearbeiten</button>
                        <div class="dropdown-menu"
                            role="menu" style="border-radius:40px;background-color:#979c9c;"><a class="dropdown-item" role="presentation" href="#" style="background-color:#979c9c;border-radius:20px;color:red;">Löschen</a></div>
                    </div>
                </div>
                <div class="col" style="min-width:100px;max-width:120px;">
                    <p style="font-size:16px;color:rgb(255,255,255);margin-top:50px;">Platz: 14 B</p>
                </div>
                <div class="col-md-3" style="min-width:120px;max-width:120px;">
                    <p style="font-size:16px;color:rgb(255,255,255);margin-top:50px;">Menge: 1</p>
                </div>
                <div class="col-md-3">
                    <p style="color:rgb(255,255,255);font-size:16px;margin-top:50px;">Preis: 69,99€</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <p style="color:rgb(255,255,255);font-size:16px;width:180px;">Gesamt: 69,99€</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"><a class="btn btn-primary" role="button" href="rechnungsauswahl.html" style="margin-top:50px;margin-left:40px;border-radius:20px;background-color:#348899;">Zur Kasse</a></div>
            </div>
        </div>
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