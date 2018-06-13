<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil bearbeiten</title>
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

    <link rel="shortcut icon" type="image/x-icon" href="/FavIcon.png">

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
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div><a class="btn btn-primary" role="button" href="warenkorb.html"
                        style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url(&quot;assets/img/Warenkorb.png&quot;);background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>

                    <a
                        class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                        <div class="btn-group"><button class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;">Profil</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                                type="button" style="background-color:#348899;border-radius:40px;"></button>
                            <div class="dropdown-menu" role="menu" style="background-color:#979c9c;border-radius:40px;"><a class="dropdown-item" role="presentation" href="user.html" data-bs-hover-animate="pulse" style="color:#348899;border-radius:60px;">Profil bearbeiten</a><a class="dropdown-item" role="presentation" href="index.html" data-bs-hover-animate="pulse"
                                    style="color:#7a243a;border-radius:60px;">Logout</a></div>
                        </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container profile profile-view" id="profile">
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center" style="background-image:url(&quot;assets/img/Bildschirmfoto 2018-05-14 um 12.19.05.png&quot;);"></div>
                    </div><input type="file" class="form-control" name="avatar-file" style="border:1px solid #348899;border-radius:40px;"></div>
                <div class="col-md-8">
                    <h1 style="color:rgb(255,255,255);">Profil bearbeiten</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Vorname</label><input class="form-control" type="text" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Nachname</label><input class="form-control" type="text" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Straße</label><input class="form-control" type="text" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Hausnummer</label><input class="form-control" type="text" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Postleitzahl</label><input class="form-control" type="text" name="firstname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Stadt</label><input class="form-control" type="text" name="lastname" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <div class="form-group"><label style="color:rgb(255,255,255);">Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email" style="border:1px solid #348899;border-radius:40px;"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Password </label><input class="form-control" type="password" name="password" autocomplete="off" required="" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(255,255,255);">Confirm Password</label><input class="form-control" type="password" name="confirmpass" autocomplete="off" required="" style="border:1px solid #348899;border-radius:40px;"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit" style="background-color:#348899;border:1px solid #348899;border-radius:40px;">SAVE </button><button class="btn btn-danger form-btn" type="reset" style="background-color:#979c9c;border:1px solid #7a243a;border-radius:40px;">CANCEL </button></div>
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
    <script src="assets/js/Media-Slider-Bootstrap-3.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>