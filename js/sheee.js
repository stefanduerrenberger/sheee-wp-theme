jQuery(document).ready(function () {
    // Display time in audio player only when runing
    jQuery(".player-column .wonderpluginaudio").bind("amazingaudioplayer.played", function (event, index) {
        jQuery(event.target).find(".amazingaudioplayer-time").show();

        // stop all other players on the page
        jQuery(".wonderpluginaudio").each(function() {
            if (this != event.target)
            jQuery(this).data("object").stopAudio();
        });
    });
    jQuery(".player-column .wonderpluginaudio").bind("amazingaudioplayer.stopped", function (event, index) {
        jQuery(event.target).find(".amazingaudioplayer-time").hide();
    });
});
