<?php include_once '../models/getInfo.php' ?>

<?php include_once "../models/database-select.php" ?>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
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
            <li class="nav__list-item"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                          class="hover-target">Nudes</a></li>
            <li class="nav__list-item"><a href="/public/contact.php" class="hover-target">Contact</a></li>
            <li class="nav__list-item"><a href="/public/logout.php" class="hover-target">Logout</a></li>
            <li class="nav__list-item"><a href="/public/dev.php" class="hover-target">TestingPage</a></li>
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
            <header class="text-center tm-site-header">
                <!--<div class="tm-site-logo"></div>-->
                <h1 class="pl-4 tm-site-title">BandAid</h1>
            </header>
        </div>
    </div>
    <div class="row">
        <?php
        $twichId = 'ca_in_la';
        $twichId = 'bandaid_stream';
        $twichId = 'eighthradio';
        $twichId = 'sandexperiment';
        $twichId = $_GET["stream_id"];;
        //$twichId = 'veryhandsomebilly';
        $twichIdvid = '574843158';
        ?>
        <!-- Load the Twitch embed script -->
        <div class="row">

            <?php
            if ($service == 'twich') {
                echo '<div id="twitch-embed" class="live-stream"></div>
            <script src="https://embed.twitch.tv/embed/v1.js"></script>';
            } elseif ($service == 'youtube') {
                echo '<div id="youtube-embed" class="live-stream"></div>';
            }
            ?>
            <hr>
        </div>
    </div>

    <div class="tm-bg-dark tm-timeline-description">
        <form action="/models/database-insert.php" method="post">
            <label for="we">Enter ID:</label><br>
            <input type="text" id="stream_id" name="stream_id" value="" placeholder="Enter id here"
                   style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
            <br>

            <input type="radio" id="type" name="type" value="stream">stream</input>
            <input type="radio" id="type" name="type" value="video">video</input>

            <hr>
            <input type="radio" id="service" name="service" value="twich">Twich</input>
            <input type="radio" id="service" name="service" value="youtube">Youtube</input>

            <hr>
            <input type="submit" value="Submit">


        </form>
        <!--
     <hr>
        <form action="/public/index-admin.php">
            <input type="hidden"
                   name="stream_id"
                   value="eighthradio">
            <input type="submit"
                   value="eighthradio">
        </form>
         -->
    </div>

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
                                <h3 class="tm-text-blue tm-font-400">Total €</h3>
                                <?php
                                $doately_id = 'act_b19dd0fd8f0a';
                                $moneyCount = getDonatelyInfo($doately_id);
                                echo '<h3>' . $moneyCount . '  €</h3>';
                                ?>
                                <p>Is gonna display current ammount collected</p>


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
                                <h3 class="tm-text-blue tm-font-400">Viewers</h3>
                                <?php
                                $liveCount = getTwichStreamViewerCount($twichId);
                                if ($liveCount == false) {
                                    echo '<h6> currently offline come back later :) </h6>';
                                } else {
                                    echo '<h3>' . $liveCount . ' viewers</h3>';
                                }
                                ?>
                                <p>Is gonna display num of current viewers</p>
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
                                <form action="/models/database-insert.php" method="post">
                                    <label for="we">Donation getter:</label><br>
                                    <input type="text" id="getter" name="getter" value="" size="100"
                                           placeholder="Donation getter"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box; border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="text" id="donation-text" name="donation-text" value="" size="100"
                                           placeholder="Enter info"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box; border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="submit" value="Submit">
                                </form>
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

                                <form action="/models/database-insert.php" method="post">
                                    <label for="we">Enter ID:</label><br>
                                    <input type="text" id="artistname_yt" name="artistname_yt" value=""
                                           placeholder="Youtube Name 'MacDemarco' "
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="text" id="artistname_apple" name="artistname_apple" value=""
                                           placeholder="AppleMusic Name 'mac-demarco/501437762'"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="text" id="artistid_spotify" name="artistid_spotify" value=""
                                           placeholder="'spotify:artist:3Sz7ZnJQBIHsXLUSo0OQtM?si=rtXdl66rQfuYjo_iIEGLNw'"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="text" id="artisturl_bandcamp" name="artisturl_bandcamp" value=""
                                           placeholder="'https://bandcamp.com/VideoEmbed?track=1197095466&bgcol=333333&linkcol=0f91ff'"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
                                    <input type="text" id="artisturl_homepage" name="artisturl_homepage" value=""
                                           placeholder="'https://www.mac-demarco.com/'"
                                           style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;background-color: #2B2B3B;color: white;"><br>
                                    <br>
                                    <input type="submit" value="Submit">
                                </form>
                                <hr>

                                <?php
                                $artistId = $artistid_spotify;
                                $artistYtName = $artistname_yt;
                                $artistAppleName = $artistname_apple;
                                $artistBandCamp = $artisturl_bandcamp;
                                $artistHomePage = $artisturl_homepage;

                                echo '   
                                  <iframe src="https://open.spotify.com/follow/1/?uri=' . $artistId . '&size=detail&theme=dark"
                                    class = "artist-frame" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                                    <br>
                                  <a href="https://geo.music.apple.com/us/artist/' . $artistAppleName . '?mt=1&app=music" class="apple-music"></a>    
                                    <br>
                                 <div class="g-ytsubscribe" data-channel="' . $artistYtName . '" data-theme="dark" data-layout="full" data-count="default"></div>
                                    <br>
                                 <iframe class="artist-bandcamp" src="' . $artistBandCamp . '" frameborder="0" mozallowfullscreen="1" webkitallowfullscreen="1" allowfullscreen="1" ></iframe>
                                 <hr>
                                 <a href="' . $artistHomePage . '">Artist home page</a>
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
        <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
        <script src="../js/templatemo-script.js"></script>
        <script src="../js/navbar.js"></script>

</body>
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
<script>
    var player;
    var id = "<?php echo $id; ?>";

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('youtube-embed', {
            videoId: id,
            autoplay: 0,
            events: {
                onReady: initialize
            }
        });
    }
    function initialize(){

        // Update the controls on load
        updateTimerDisplay();
        updateProgressBar();

        // Clear any old interval.
        clearInterval(time_update_interval);

        // Start interval to update elapsed time display and
        // the elapsed part of the progress bar every second.
        time_update_interval = setInterval(function () {
            updateTimerDisplay();
            updateProgressBar();
        }, 1000)

    }

</script>



</html>