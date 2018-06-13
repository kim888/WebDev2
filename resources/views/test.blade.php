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

    <link rel="shortcut icon" type="image/x-icon" href="/FavIcon.png">


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
                <div class="form-group"><label for="search-field">
                        <i class="fa fa-search"></i>
                    </label><input class="form-control search-field" type="search" name="search" id="search-field">
                </div>
            </form>

            @auth
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
                        <p class="description text-white"><?= $bands[$i]?></p>
                        <a href="#" class="learn-more">Learn more »</a>
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



<!-- Email Formular Internet Recherche


    <form name="contact_form" method="post"  onSubmit="return evalid()">
        <table><tr>
                <td>First Name *</td>
                <td colspan="2"><input name="fname" type="text" /></td>
            </tr><tr>
                <td>Last Name *</td>
                <td colspan="2"><input name="lname" type="text" /></td>
            </tr><tr>
                <td>Your E-mail *</td>
                <td colspan="2"><input type="text" name="mail" /></td>
            </tr><tr>
                <td>Subject *</td>
                <td colspan="2"><input name="subject" type="text" /></td>
            </tr><tr>
                <td>Message *</td>
                <td colspan="2"><textarea name="message"></textarea></td>
            </tr><tr>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td><input type="reset" name="reset" value="Reset"/></td>
                <td align="right"><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <script type="text/javascript">
        //email form validation

        function everif(str) {

            var at="@"
            var punct="."
            var lat=str.indexOf(at)
            var lstr=str.length
            var lpunct=str.indexOf(punct)
            if (str.indexOf(at)==-1){
                alert("Valid email must be entered")
                return false
            }

            if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
                alert("Valid email must be entered")
                return false
            }

            if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
                alert("Valid email must be entered")
                return false
            }

            if (str.indexOf(at,(lat+1))!=-1){
                alert("Valid email must be entered")
                return false
            }

            if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
                alert("Valid email must be entered")
                return false
            }

            if (str.indexOf(punct,(lat+2))==-1){
                alert("Valid email must be entered")
                return false
            }

            if (str.indexOf(" ")!=-1){
                alert("Valid email must be entered")
                return false
            }

            return true
        }

        function evalid(){
            var emailID=document.contact_form.mail

            if (everif(emailID.value)==false){
                emailID.focus()
                return false
            }

            //empty field validation

            var fname=document.contact_form.fname
            if ((fname.value==null)||(fname.value=="")){
                alert("Fields marqued with * must be entered")
                fname.focus()
                return false
            }

            var lname=document.contact_form.lname
            if ((lname.value==null)||(lname.value=="")){
                alert("Fields marqued with * must be entered")
                lname.focus()
                return false
            }

            var subject=document.contact_form.subject
            if ((subject.value==null)||(subject.value=="")){
                alert("Fields marqued with * must be entered")
                subject.focus()
                return false
            }

            var message=document.contact_form.message
            if ((message.value==null)||(message.value=="")){
                alert("Fields marqued with * must be entered")
                message.focus()
                return false
            }

            return true
        }
    </script>
    <?php session_start();
    if(isset($_POST['Submit'])) {
        $youremail = 'kimberly.schlenzig@hof-university.de';
        $fromsubject = 'kimberly.schlenzig@hof-university.de';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $to = $youremail;
        $mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
        $body = $fromsubject.'

	The person that contacted you is  '.$fname.' '.$lname.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'

	 Message:
	 '.$message.'

	|---------END MESSAGE----------|';
        echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>";
        mail($to, $subject, $body);
    } else {
        echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>";
    }
    ?>

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






