<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/mdb.css')}}">

    <link rel="stylesheet" href="{{asset('/css/dropdown.css')}}">


    <link rel="stylesheet" href="{{asset('/fonts/fontNFL.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/FavIcon2.0.png")}}">

    <style type="text/css">

        p, h3, marquee{
            font-family: 'Bougan SSi';
            font-size: 2em;
        }

        </style>


    <!--Link für angularjs
    <script src="/node_modules/angular/angular.js"></script>
    -->


</head>

<body>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="test.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                                                                                                                                                                                                                                     data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
            </ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group">
                    <label for="search-field">
                        <i class="fa fa-search"></i>
                    </label>
                    <input class="form-control search-field" type="search" name="search" id="search-field">
                </div>
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


<div data-bs-parallax-bg="true" style="height:500px;background-image:url({{ asset('img/duotone.png') }});background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
<br>


<!--Live Ticker-->
<marquee style = "color: white">+++Liveticker!!! <span style="color: #348899">Achtung</span> Eminem Tickets<span style="color: #348899"> fast ausverkauft!!!</span> Liveticker!!!+++ </marquee>



<!--

    Code vor Hover Effekt:

    <?php for($i = 0; $i < count($bands); $i++) : ?>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box"><i class="fa fa-map-marker icon"></i>
                <h3 class="name"><?= $bands[$i]?></h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <?php endfor ?>
        -->

<div class="features-boxed">
<div class="container">
    <div class="row justify-content-center features">

        <?php for($i = 0; $i < count($bands); $i++) : ?>
        <div class="col-sm-6 col-md-5 col-lg-4 item" style="background-size:98% auto; background-repeat: no-repeat ;background-image: url({{asset('img/dbImages/artists/' . $imgNames[$i] . '.jpg')}})">
            <div class="box" style="background: rgba(0,0,0,0); width: 100px; height: 300px;">
                <div class="view overlay">
                    <i class="fa fa-map-marker icon"></i>
                    <div class="mask flex-center rgba-red-strong">
                        <p name="bandname" class="description text-white"><?= $bands[$i]?></p>
                        <a  href="artist/{{$bands[$i]}}" class="learn-more">mehr... »</a>

                    </div>
                </div>
            </div>
        </div>
        <?php endfor ?>
    </div>
</div>

<!--Karten zu Location Berlin, Hof, Erfurt, Bayreuth, München


    <iframe src="https://www.google.com/maps/d/embed?mid=1lH_CbnK2_TTEVWtVwVC-9F4GISje9R9P" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1hZ3zQ4yZ8VrDYzRIPpvQny407458xesh" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1X4yocFN7xDB1Vf9Dc_jhZShDzN8vviZr" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1jMCoF_rlpKWQkf6zsK8xFxjT_3U_nuWl" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1IMAK67IDB5jvrsc1X8Uc5Bp1BbV_6tGW" width="640" height="480"></iframe>
-->




</div>



<div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://facebook.com"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">NEITQEY © 2018</p>
    </footer>
</div>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bs-animation.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>






