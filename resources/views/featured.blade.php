<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEITQEY_V3.0</title>
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
    <link rel="stylesheet" href="{{asset('bootstrap/css/mdb.css')}}">

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
                </form><a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                <a
                    class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="logIn.html">Login</a></div>
        </div>
    </nav>


    <!--korrekter ursprünglicher Code ohne Hover:

    <div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
                {{--Einzelnes Element wird automatisch gefüllt und je nach anzahl der übergebenen Daten im Array vervielfacht--}}
    <?php for($i = 0; $i < count($users); $i++) : ?>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name"><?= $users[$i]?></h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                </div>
                <?php endfor ?>
            </div>
        </div>
    </div>


    Beispiel für Hover:

    <div class="view overlay">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(7).jpg" class="img-fluid " alt="">
        <div class="mask flex-center rgba-red-strong">
            <p class="white-text">Strong overlay</p>
        </div>
    </div>


    code mit hover in Box aber noch nicht in vollkommener boxbreite
-->

    <div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
                {{--Einzelnes Element wird automatisch gefüllt und je nach anzahl der übergebenen Daten im Array vervielfacht--}}
                <?php for($i = 0; $i < count($users); $i++) : ?>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box">
                            <div class="view overlay">
                            <i class="fa fa-map-marker icon">
                                <h3 class="name"><?= $users[$i]?></h3>
                            </i>
                            <div class="mask flex-center rgba-red-strong">
                                <p class="description text-white"><?= $users[$i]?></p>
                                <a href="#" class="learn-more">Learn more »</a></div>
                        </div></div></div>
                <?php endfor ?>
            </div>
        </div>
    </div>




    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://facebook.com"><i class="icon ion-social-facebook"></i></a></div>
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
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}/"></script>
    <script src="{{asset('/js/bs-animation.js')}}"></script>
</body>

</html>