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
    <link href="{{ asset('bootstrap/css/mdb.css') }}" media="all" rel="stylesheet" type="text/css" />

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
                <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
            </form><a class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="login.html">Login</a></div>
    </div>
</nav>


<div data-bs-parallax-bg="true" style="height:500px;background-image:url({{ asset('img/duotone.png') }});background-position:center;background-size:cover;background-repeat:no-repeat;"></div>




<!--

    Code vor Hover Effekt:

    <?php for($i = 0; $i < count($users); $i++) : ?>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box"><i class="fa fa-map-marker icon"></i>
                <h3 class="name"><?= $users[$i]?></h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
            </div>
            <?php endfor ?>
        -->

<div class="features-boxed">
<div class="container">
    <div class="row justify-content-center features">

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

            {{--
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-map-marker icon"></i>
                                <h3 class="name">{{$user1}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-clock-o icon"></i>
                                <h3 class="name">{{$user2}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-list-alt icon"></i>
                                <h3 class="name">{{$user3}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-leaf icon"></i>
                                <h3 class="name">{{$user4}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-plane icon"></i>
                                <h3 class="name">{{$user5}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 item">
                            <div class="box"><i class="fa fa-phone icon"></i>
                                <h3 class="name">{{$user6}}</h3>
                                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="#" class="learn-more">Learn more »</a></div>
                        </div>--}}
        </div>
    </div>

    <!--Karten zu Location Berlin, Hof, Erfurt, Bayreuth


    <iframe src="https://www.google.com/maps/d/embed?mid=1lH_CbnK2_TTEVWtVwVC-9F4GISje9R9P" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1hZ3zQ4yZ8VrDYzRIPpvQny407458xesh" width="640" height="480"></iframe>

    <iframe src="https://www.google.com/maps/d/embed?mid=1X4yocFN7xDB1Vf9Dc_jhZShDzN8vviZr" width="640" height="480"></iframe>
   
    <iframe src="https://www.google.com/maps/d/embed?mid=1jMCoF_rlpKWQkf6zsK8xFxjT_3U_nuWl" width="640" height="480"></iframe>
    -->

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






