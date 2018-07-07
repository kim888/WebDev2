<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
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
    <link rel="stylesheet" href="{{asset('bootstrap/css/mdb.css')}}">

    <link rel="stylesheet" href="{{asset('/fonts/fontNFL.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dropdown.css')}}">

    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">



    <link rel="shortcut icon" type="image/x-icon" href="{{asset('FavIcon.png')}}">


    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">



    <style type="text/css">


        p,  .card-header{
            font-family: 'Bougan SSi';
            font-size: 3em;
        }

        .ueber{
            font-family: 'NFLCHARG';
            font-weight:600;
            font-size:3em;
        }

        img{
            object-fit: cover;
            height: 700px;
            width: auto;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
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





    <p class="lead text-center text-white ueber">GENRE</p>


    <!--Dropdown auswahl der Genre-->
    <?php for($i = 0; $i < count($genre); $i++) : ?>
    <div role="tablist" id="accordion" style="margin-top:20px;">
        <div class="card">
            <div class="card-header" id="heading{{$genre[$i]}}">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$genre[$i]}}" aria-expanded="true" aria-controls="collapse{{$genre[$i]}}" style="width: 100%; text-decoration: none; color: black;">
                        {{$genre[$i]}}
                    </button>
                </h5>
            </div>


            <div id="collapse{{$genre[$i]}}" class="collapse hide" aria-labelledby="heading{{$genre[$i]}}" data-parent="#accordionExample">
                <div class="card-body">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">


                            @switch($genre[$i])

                                @case('ROCK')

                                <div class="carousel-item active">

                                    <a href="artist/{{$pictures[0][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[0][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[0][1]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[0][1].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[0][2]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[0][2].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;

                                @case('POP')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[1][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[1][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[1][0]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[1][0].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[1][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[1][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;

                                @case('IRISH')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[2][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[2][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[2][0]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[2][0].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[2][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[2][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;

                                @case('VOLKSMUSIK')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[3][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[3][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[3][0]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[3][0].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[3][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[3][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;

                                @case('REGGAE')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[4][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[4][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[4][0]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[4][0].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[4][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[4][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;

                                @case('HIPHOP')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[5][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[5][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[5][1]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[5][1].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[5][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[5][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;


                                @case('TECHNO')

                                <div class="carousel-item active">
                                    <a href="artist/{{$pictures[6][0]}}">
                                    <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[6][0].".jpg")}}" alt="First slide">
                                    </a>
                                </div>
                                    <div class="carousel-item">
                                        <a href="artist/{{$pictures[6][0]}}">
                                        <img class="d-block w-100" src="{{asset("img/dbImages/artists/".$pictures[6][0].".jpg")}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <<a href="artist/{{$pictures[6][0]}}">
                                        <img class="d-block w-100"  src="{{asset("img/dbImages/artists/".$pictures[6][0].".jpg")}} alt="Third slide">
                                        </a>
                                    </div>


                                @break;



                            @endswitch




                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php endfor ?>


    <div class="footer-basic">
        <footer>
            <div class="social"><a href="http://www.snapchat.com"><i class="icon ion-social-instagram"></i></a><a href="http://www.instagram.de"><i class="icon ion-social-snapchat"></i></a><a href="http://www.twitter.de"><i class="icon ion-social-twitter"></i></a><a href="http://www.facebook.de"><i class="icon ion-social-facebook"></i></a></div>
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
    <script src="{{asset("/js/jquery.min.js")}}"></script>
    <script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("/js/bs-animation.js")}}"></script>
    <script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js")}}"></script>
    <script src="{{asset("/js/Media-Slider-Bootstrap-3.js")}}"></script>
    <script src="{{asset("/js/Profile-Edit-Form.js")}}"></script>
    <script src="{{asset("/js/Simple-Slider.js")}}"></script>
</body>

</html>