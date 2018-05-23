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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="404.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="404.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div><a class="btn btn-primary" role="button" href="warenkorb.html"
                        style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url(&quot;assets/img/Warenkorb.png&quot;);background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                    <a
                        class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a>
                        <div class="btn-group"><button class="btn btn-primary" type="button" style="background-color:#348899;border-radius:40px;">Profil</button><button class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false"
                                type="button" style="background-color:#348899;border-radius:40px;"></button>
                            <div class="dropdown-menu" role="menu" style="background-color:#979c9c;border-radius:40px;"><a class="dropdown-item" role="presentation" href="user.html" data-bs-hover-animate="pulse" style="color:#348899;border-radius:60px;">Profil bearbeiten</a><a class="dropdown-item" role="presentation" href="index.html" data-bs-hover-animate="pulse"
                                    style="color:#7a243a;border-radius:60px;">Logout</a></div>
                        </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col" style="background-color:#ffffff;max-height:none;min-height:1;height:208px;"><img src="assets/img/Bildschirmfoto 2018-05-14 um 12.19.05.png">
            <p style="font-size:60px;margin-top:-145px;margin-right:-40px;margin-bottom:15px;margin-left:none;width:550px;height:121px;padding-left:0px;">Max Mustermann</p>
        </div>
    </div><p class = "pFavoriten" style="font-size:30px;">Profil bearbeiten</p>
    <div class="profilBlock" style="margin-left:72px;width:auto;padding-left:30px;margin-right:72px;padding-bottom:30px;background-color:#979c9c;"><label class="label" style="color:rgb(0,0,0);">Vorname</label>
        <div class="form-group"><input type="text" placeholder="Max" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">Nachname</label>
        <div class="form-group"><input type="text" placeholder="Mustermann" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">Straße und Hausnummer</label>
        <div class="form-group"><input type="text" placeholder="Musterstraße 1" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">PLZ</label>
        <div class="form-group"><input type="text" placeholder="12345" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">Ort</label>
        <div class="form-group"><input type="text" placeholder="Münster" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">Land</label>
        <div class="form-group"><input type="text" placeholder="Deutschland" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div><label class="label" style="color:rgb(0,0,0);">Telefon</label>
        <div class="form-group"><input type="text" placeholder="017012345678" class="textfield" style="border:1px solid #348899;border-radius:40px;"></div>
        <div class="row">
            <div class="col"><label class="col-form-label" style="color:#7a243a;">Passwort ändern</label></div>
        </div><label class="label" style="color:rgb(0,0,0);">Altes Passwort:</label>
        <div class="form-group"><input type="password"></div><label class="label" style="color:rgb(0,0,0);">Neues Passwort:</label>
        <div class="form-group"><input type="password"></div><button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="background-color:#979c9c;border:1px solid #348899;color:rgb(255,255,255);font-size:12px;border-radius:40px;">Änderungen speichern</button></div>
    <div
        class="footer-basic">
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
</body>

</html>