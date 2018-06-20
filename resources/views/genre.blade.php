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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/FavIcon.png")}}">


    <style type="text/css">
        @font-face {
            font-family: 'NFL Chargers 2007';
            src: url('{{ public_path('public/fonts/NFLCHARG.woff')}}');
        format('Web Open Font Format')
        font-weight: 100;
        }

        p .ueber{
            font-family: 'NFL Chargers 2007';
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
                </form><a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url(&quot;assets/img/Warenkorb.png&quot;);background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                <a
                    class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="logIn.html">Login</a></div>
        </div>
    </nav>
    <p class="lead text-center text-white ueber" style="font-size:2em;">GENRE</p>
    <div class="row">
        <div class="col" style="background-color:#ffffff;">
            <p class="float-left ueber" style="color: black; font-size:16px;width:200px;margin:0px;padding-left:20px;">ROCK</p>
        </div>
    </div>
    <div class="simple-slider" style ="height: 500px">
        <div class="swiper-container">
            <div class="swiper-wrapper" style ="height: 500px">
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="background-color:#ffffff;">
            <p class="float-left ueber" style="color: black; font-size:16px;width:200px;margin:0px;padding-left:20px;">HIP HOP</p>
        </div>
    </div>
    <div class="simple-slider" style = "height: 500px">
        <div class="swiper-container">
            <div class="swiper-wrapper" style = "height: 500px">
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="background-color:#ffffff;">
            <p class="float-left ueber" style="color: black; font-size:16px;width:200px;margin:0px;padding-left:20px;">POP</p>
        </div>
    </div>
    <div class="simple-slider" style = "height: 500px">
        <div class="swiper-container">
            <div class="swiper-wrapper" style = "height: 500px">
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="background-color:#ffffff;">
            <p class="float-left ueber" style="color: black; font-size:16px;width:200px;margin:0px;padding-left:20px;">ELECTRO/HOUSE</p>
        </div>
    </div>
    <div class="simple-slider" style = "height: 500px">
        <div class="swiper-container">
            <div class="swiper-wrapper" style = "height: 500px">
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
                <div class="swiper-slide" style="background-image:url({{asset('https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500')}});"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
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
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/bs-animation.js")}}"></script>
    <script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/Media-Slider-Bootstrap-3.js")}}"></script>
    <script src="{{asset("assets/js/Profile-Edit-Form.js")}}"></script>
    <script src="{{asset("assets/js/Simple-Slider.js")}}"></script>
</body>

</html>