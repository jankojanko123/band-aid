<?php include_once "database-select.php" ?>

<script>
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