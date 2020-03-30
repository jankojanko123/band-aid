<?php include_once '../models/getInfo.php' ?>
<?php include_once "../models/conf/conf.php" ?>
<?php include_once "../models/database-select.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BandAid</title>
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../css/bootstrap.min-admin.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style-admin.css">

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
            <!--<li class="nav__list-item"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                          class="hover-target">Nudes</a></li>-->
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
    <div class="row">
        <div class="col-lg-12">
            <header class="text-right tm-site-header">
                <!--<div class="tm-site-logo"></div>-->
                <h1 class="pl-4 tm-site-title">BandAid</h1>
            </header>
        </div>
    </div>
    <div class="row">
        <div id="twitch-embed" class="live-stream"></div>
        <!-- Load the Twitch embed script -->
        <script src="https://embed.twitch.tv/embed/v1.js"></script>
        <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
        <script type="text/javascript">

            var id = "<?php echo $id; ?>";
            var type = "<?php echo $type; ?>";

            if (type === 'stream') {
                new Twitch.Embed("twitch-embed", {
                    width: "100%",
                    height: "100%",
                    channel: id,
                    theme: "dark",
                    allowfullscreen: "true",
                    layout: "video"
                });
            } else if (type === 'video') {
                new Twitch.Embed("twitch-embed", {
                    width: "100%",
                    height: "100%",
                    video: id,
                    theme: "dark",
                    allowfullscreen: "true",
                    layout: "video"
                });
            }

            embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
                var player = embed.getPlayer();
                player.play();
                player.setVolume(0.5);

            });
        </script>
    </div>
    <div class="under-media-info">
        <div class="row tm-section-mb tm-section-mt">
            <a class="dbox-donation-button"
               href="https://pages.donately.com/bandaid/form/frm_a4dd29054afc">Donate</a>

            <!--
            <div class="tm-media-description-wrap">
                <div class="tm-bg-dark-light tm-timeline-description-media">
                    <h3 class="tm-text-blue tm-font-400">Viewers</h3>
                    //<?php

            //$liveCount = getTwichStreamViewerCount($id);
            //if ($liveCount == false) {
            //    echo '<h6> currently offline come back later :) </h6>';
            //} else {
            //    echo '<h3>' . $liveCount . ' viewers</h3>';
            //}
            //?>
                </div>
            </div>
            -->
        </div>
    </div>


    <div class="container tm-container-2">
        <div class="row">
            <div class="row tm-section-mb">
                <div class="col-lg-12">
                    <div class=" tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="../img/img-01.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark tm-timeline-description">
                                    <h3 class="tm-text-blue tm-font-400">Donation stats</h3>
                                    <?php
                                    $doately_id = 'act_b19dd0fd8f0a';
                                    $moneyCount = getDonatelyInfo($doately_id);
                                    //echo '<h3>' . $moneyCount . '  €</h3>';
                                    echo '<h3> 2301 €</h3>';
                                    ?>
                                    <p>Is gonna display current live ammount collected and other info</p>


                                    <script type="text/javascript">
                                        document.write('<p class="tm-text-green float-right mb-0"><span id="date-time">', new Date().toLocaleString(), '</span>.</p>')
                                        if (document.getElementById) onload = function () {
                                            setInterval("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="../img/img-02.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark-light tm-timeline-description">
                                    <h3 class="tm-text-blue tm-font-400">Stream</h3>
                                    <?php
                                    //$liveCount = getTwichStreamViewerCount($id);
                                    //if ($liveCount == false) {
                                    //    echo '<h6> currently offline come back later :) </h6>';
                                    //} else {
                                        echo '<div class="head">';
                                        echo '<h3>coming in...</h3>'.'<h7>live viewers</h7>';
                                        echo '</div>';

                                    //}
                                    ?>
                                    <script>

                                        function locsetter() {
                                            $.ajax({
                                                method: "POST",
                                                url: "http://68.183.71.242/models/set_twich_view_count.php",
                                                dataType: 'json'
                                            }).done(function (data) {
                                                $(".head h3").html(data);
                                            });
                                        }
                                        setInterval(function () {
                                            locsetter()
                                        }, 5000);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="../img/img-03.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark tm-timeline-description">
                                    <?php echo '
                                    <h3 class="tm-text-blue tm-font-400">' . $don_name . '</h3>
                                   
                                    <p>' . $don_text . '</p>
                                    '; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="../img/img-04.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark-light tm-timeline-description">
                                    <h3 class="tm-text-blue tm-font-400">Artist</h3>


                                    <?php
                                    $artistId = 'spotify:artist:3Sz7ZnJQBIHsXLUSo0OQtM?si=rtXdl66rQfuYjo_iIEGLNw';
                                    $artistYtName = "MacDemarco";
                                    $artistAppleName = 'mac-demarco';

                                    echo '   
                                  <iframe src="https://open.spotify.com/follow/1/?uri=' . $artistId . '&size=detail&theme=dark"
                                    class = "artist-frame" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                                    <br>
                                  <a href="https://geo.music.apple.com/us/artist/' . $artistAppleName . '/501437762?mt=1&app=music" class="apple-music"></a>    
                                    <br>
                                 <div class="g-ytsubscribe" data-channel="' . $artistYtName . '" data-theme="dark" data-layout="full" data-count="default"></div>
                                    <br>
                                 <iframe class="artist-bandcamp" src="https://bandcamp.com/VideoEmbed?track=1197095466&bgcol=ffffff&linkcol=0f91ff" frameborder="0" mozallowfullscreen="1" webkitallowfullscreen="1" allowfullscreen="1" ></iframe>
                                 
                                 ';
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- .container -->

            <script src="../js/jquery.min.js"></script>
            <script src="../js/templatemo-script.js"></script>
            <script src="../js/navbar.js"></script>

</body>
<footer>
    <p> stay safe </p>
</footer>


</html>