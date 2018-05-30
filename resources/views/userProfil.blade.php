<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEITQEY_V6.0</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
        <div class="container"><a class="navbar-brand" href="index.html" style="background-image:url(&quot;assets/img/Logo.png&quot;);max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div><a class="btn btn-primary" role="button" href="warenkorb.html"
                        style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url(&quot;assets/img/Warenkorb.png&quot;);background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                    <a
                        class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                        <div class="btn-group"><button class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;">Profil</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                                type="button" style="background-color:#348899;border-radius:40px;"></button>
                            <div class="dropdown-menu" role="menu" style="background-color:#979c9c;border-radius:40px;"><a class="dropdown-item" role="presentation" href="profilBearbeiten.html" data-bs-hover-animate="pulse" style="color:#348899;border-radius:60px;">Profil bearbeiten</a><a class="dropdown-item" role="presentation" href="index.html"
                                    data-bs-hover-animate="pulse" style="color:#7a243a;border-radius:60px;">Logout</a></div>
                        </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col" style="background-color:#ffffff;max-height:none;min-height:1;height:208px;"><img src="assets/img/Bildschirmfoto 2018-05-14 um 12.19.05.png">
            <p style="font-size:60px;margin-top:-145px;margin-right:-40px;margin-bottom:15px;margin-left:none;width:550px;height:121px;padding-left:0px;">Max Mustermann</p>
        </div>
    </div><p class = "pFavoriten" style="font-size:30px;">Favoriten</p>
    <div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Works everywhere</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable </h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:100%;max-width:none;min-width:auto;min-height:0;color:black;background-color:#fff;">Anstehend - Gekauft</button>
        <div class="dropdown-menu"
            role="menu" style="width:100%;"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
    </div>
    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width:100%;min-width:auto;background-color:rgb(255,255,255);color:rgb(0,0,0);margin-top:20px;">Besucht&nbsp;</button>
        <div class="dropdown-menu"
            role="menu" style="width:100%;"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
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
</body>

</html>