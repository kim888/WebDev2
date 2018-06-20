<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnung bearbeiten</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css")}}">
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
                        class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a>
                        <div class="btn-group"><button class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;">Admin</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                                type="button" style="background-color:#348899;border-radius:40px;"></button>
                            <div class="dropdown-menu" role="menu" style="background-color:#979c9c;border-radius:40px;"><a class="dropdown-item" role="presentation" href="adminNutzer.html" style="border-radius:60px;color:white;">Nutzer</a><a class="dropdown-item" role="presentation" href="adminRechnung.html" style="border-radius:60px;color:white;">Rechnung</a>
                                <a
                                    class="dropdown-item" role="presentation" href="adminTicket.html" style="border-radius:60px;color:white;">Ticket</a><a class="dropdown-item" role="presentation" href="adminEvent.html" style="border-radius:60px;color:white;">Event</a><a class="dropdown-item" role="presentation" href="adminLocation.html" style="border-radius:60px;color:white;">Location</a>
                                    <a
                                        class="dropdown-item" role="presentation" href="adminKonzert.html" style="border-radius:60px;color:white;">Konzert</a><a class="dropdown-item" role="presentation" href="adminKuenstler.html" style="border-radius:60px;color:white;">Künstler</a><a class="dropdown-item" role="presentation" href="index.html" data-bs-hover-animate="pulse"
                                            style="color:#7a243a;border-radius:60px;">Logout</a></div>
                        </div>
                </form>
            </div>
        </div>
    </nav>
    <p style="width:100%;height:auto;font-size:40px;color:rgb(255,255,255);">Rechnungen bearbeiten</p>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group"><label style="color:rgb(255,255,255);">Kundennummer (NutzerID)</label><input type="text" style="margin-left:35px;font-size:16px;border:1px solid #348899;border-radius:40px;"></div>
                </div>
                <div class="col-md-6" style="padding-left:0px;">
                    <div class="form-group"><button class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;margin-left:12px;">Rechnung suchen</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="visible">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group"><label style="color:rgb(255,255,255);">RechnungID:&nbsp;</label></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label style="color:rgb(255,255,255);">Kaufdatum:</label></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label style="color:rgb(255,255,255);">TicketID:</label></div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label style="color:rgb(255,255,255);">Preis:</label></div>
                </div>
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
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/bs-animation.js")}}"></script>
    <script src="{{asset("assets/js/Media-Slider-Bootstrap-3.js")}}"></script>
    <script src="{{asset("assets/js/Profile-Edit-Form.js")}}"></script>
</body>

</html>