<?php
session_start();
?>
<head><title>Ravindrababu |Ravula</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="public"/>

    <!-- LIBRARY FONT-->

    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="assets/css/pricing.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/h3.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">





    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script src="assets/js/testminolas/app.js"></script>
    <script src="assets/js/testminolas/wow.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><i class="topbar-icon fa fa-envelope-o"></i><span>gate2014.ravindra@gmail.com</span></a></div>
                <div class="hotline"><i class="topbar-icon fa fa-phone"></i><span>Toll Free: 18002744514 (10am-7pm)</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="https://www.facebook.com/ravindra.ravula" class="facebook"><i class="fa fa-facebook"></i></a><a href="https://plus.google.com/100601401117543080491" class="google"><i class="fa fa-google-plus"></i></a><a href="https://www.youtube.com/channel/UCJjC1hn78yZqTf0vdTC6wAQ" class="google"><i class="fa fa-youtube-play"></i></a></div>
                <div class="group-sign-in"><!--<a href="login.php" class="login">login</a>--><!--<a href="register.php" class="register">register</a>--></div>
            </div>
        </div>
    </div>
    <div class=" header-main_1 homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="index.php" class="header-logo"><img src="assets/images/logo-new.jpg" alt="" class="img-responsive"/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <!--<li ><a href="index.php" class="main-menu">Home</a></li>-->
                        <li class="dropdown"><a href="courses.php" class="main-menu">Courses</a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1 hidden-sm hidden-xs">
                                <li><a href="gate.php" class="link-page">GATE</a></li>
                                <li><a href="interviewpreperation.php" class="link-page">Job Interview Preparation</a></li>
                                <li><a href="technologies.php" class="link-page">Technologies</a></li>
                                <li class="dropdown"><a href="btech-projects.php" class="main-menu">B.Tech Projects</a></li>


                            </ul>
                        </li>

                        <li class="hidden-sm hidden-xs"><a href="testimonial.php" class="main-menu">Testimonials</a></li>
                        <li ><a href="register.php" class="main-menu">Register</a></li>
                        <li ><a href="feedback.php" class="main-menu">Career Guidance</a></li>
                        <li ><a href="faq.php" class="main-menu">FAQ</a></li>
                        <li ><a href="about.php" class="main-menu">About</a></li>
                   <!--     <li ><a href="contact.php" class="main-menu">Contact us</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
