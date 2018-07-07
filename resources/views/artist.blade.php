<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('FavIcon.png')}}">
    <link rel="stylesheet" href="{{asset('/fonts/fontNFL.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dropdown.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">

</head>
<style type="text/css">
    .card-body-p{
        color: black;
    }

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

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
        <div class="container"><a class="navbar-brand" href="/index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
                </form>

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






            </div>
        </div>
    </nav>
    <!--Artist Header-->
    <div class="row">
        <div class="col" style="background-color:#ffffff;max-height:none;min-height:100px;height:208px;">
            <img src="{{asset('img/dbImages/artists/' . $bandinfos[1] . '.jpg')}}" style="height: 100%; background-size: cover">
            <p class="text-left ueber" style="font-size:40px;margin-top:-145px;margin-right:0px;margin-bottom:15px;margin-left:none;width:600px;height:121px;padding-left:30px;max-width:450px;min-width:auto; color: black;">
                {{$bandinfos[0]}}
            </p>
        </div>
    </div>
<!--
    <video width="1280" height="720" controls>
        <source src= '{{ url('rain.mp4') }} ' type="video/mp4">
        Your browser does not support the video tag.
    </video>
-->
    <!--Bildergalerie-->
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-color:#ffffff; height: 550px; width: 100%;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('img/dbImages/konzert01.jpg')}}" style="background-size: cover" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/dbImages/konzert02.jpg')}}" style="width: 800px;"  alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/dbImages/konzert03.jpg')}}" style="width: 800px;"  alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators" style="margin-left:0px;margin-right:0px;margin-bottom:0px;width:auto;height:0px;max-width:auto;padding-left:0px;min-width:auto;">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    <!--Dropdown auswahl der Veranstaltung-->
    <?php for($i = 0; $i < count($events); $i++) : ?>
    <div role="tablist" id="accordion" style="margin-top:20px;">
            <div class="card">
            <div class="card-header" id="heading{{$events[$i][0]}}">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$events[$i][0]}}" aria-expanded="true" aria-controls="collapse{{$events[$i][0]}}" style="width: 100%; text-decoration: none; color: black;">
                        {{$events[$i][0]}},  {{$events[$i][6]}}
                    </button>
                </h5>
            </div>

            <div id="collapse{{$events[$i][0]}}" class="collapse hide" aria-labelledby="heading{{$events[$i][0]}}" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-body-p" style="font-size:16px;margin:0px;margin-top:0px;margin-right:0px;margin-left:0px;width:150px;height:0px;">Uhrzeit: {{$events[$i][7]}}</p>
                    <p class="card-body-p" style="font-size:16px;width:308px;height:0px;margin:0px;margin-top:35px;">Location: {{$events[$i][4]}} {{$events[$i][0]}}, {{$events[$i][1]}} {{$events[$i][2]}}</p>
                    <p class="card-body-p" style="width:196px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Verfügbare Plätze: {{$events[$i][8]}}</p>
                    <button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;">
                        Favorisieren
                    </button>
                    <button class="btn btn-primary" role="button" href="platzwahl.html" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;margin-left:35px;">
                        <a href="/platzwahl.html">Platz buchen
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endfor ?>
    <!--Footer-->
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
    <script src="{{asset('/js/Media-Slider-Bootstrap-3.js')}}"></script>
    <script src="{{asset('/js/Profile-Edit-Form.js')}}"></script>
</body>

</html>