<?php include_once '../models/getInfo.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BandAid</title>
    <!--

    Timeless Template

    http://www.templatemo.com/tm-517-timeless

    -->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">

    <link rel="stylesheet" href="../css/navbar.css">
    <!-- yt button style -->
    <script src="https://apis.google.com/js/platform.js"></script>


</head>
<body>
<!--nav -->
<header class="cd-header">
    <div class="header-wrapper">
        <div class="nav-but-wrap">
            <div class="menu-icon hover-target">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>
        </div>
    </div>
</header>

<div class="nav">
    <div class="nav__content">
        <ul class="nav__list">
            <li class="nav__list-item active-nav"><a href="/public/" class="hover-target">Home</a></li>
            <li class="nav__list-item"><a href="/public/archive.php" class="hover-target">Archive</a></li>
            <li class="nav__list-item"><a href="" class="hover-target">Studio</a></li>
            <li class="nav__list-item"><a href="/public/contact.php" class="hover-target">Contact</a></li>
            <li class="nav__list-item"><a href="/public/login.php" class="hover-target">Login</a></li>
        </ul>
    </div>
</div>
<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>
<!--nav -->
<div class="container">
    <div class="col-lg-12">
        <header class="text-center tm-site-header">
            <!--<div class="tm-site-logo"></div>-->
            <h1 class="pl-4 tm-site-title">Archived</h1>
            <p>under construction</p>
        </header>
    </div>
    <div class="archive-concerts">

            <?php
            $ytId = 'tjlrpehzL4w';
            $twichId = 'bobross';

            $resp = getTwichArcivedStreams($twichId);

            foreach ($resp->data as $key => $items) {
                echo '       
                <div class="tm-bg-dark tm-archive-videos">
            <iframe src="https://player.twitch.tv/?video=' . $items->id . '" class="archive-concerts" frameborder="0" autoplay="0" allowfullscreen="true" scrolling="no"></iframe>

            <h3 class="tm-text-blue tm-font-400">' . $items->title . '</h3>
            <p>' . $items->published_at . '</p>
            
            </div>
            ';
            }
            ?>

    </div>

    <hr>
    <a href="/public/contact.php">ContactUs</a>

    <!-- .container -->

    <script src="../js/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <script src="../js/templatemo-script.js"></script>
    <script src="../js/navbar.js"></script>

</body>
</html>