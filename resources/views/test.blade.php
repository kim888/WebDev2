<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEITQEY_V1.0</title>
    <link href="{{ asset('css/styles.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Navigation-with-Search.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Footer-Basic.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/Features-Boxed.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/ionicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />


</head>

<body>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="test.blade.php" style="background-image:url(&quot;assets/img/Logo.png&quot;);max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                                                                                                                                                                                                                                           data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Featured</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Genre</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Location</a></li>
            </ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
            </form><a class="btn btn-light action-button" role="button" href="#" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="#">Login</a></div>
    </div>
</nav>
<div data-bs-parallax-bg="true" style="height:500px;background-image:url({{ asset('img/duotone.png') }});background-position:center;background-size:cover;background-repeat:no-repeat;"></div>
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
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
        </div>
    </div>
</div>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
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