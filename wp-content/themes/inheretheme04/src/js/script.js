(function($) {

    /* huidig jaartal in footer */
    var thisDate = new Date();
    var thisYear = thisDate.getFullYear();
    $("#current_year").html(thisYear);

    /* resize textarea contact form */
    $('#your-message').autoResize();



    /* AUDIO */

    function resetAll() {
        $(".play").addClass("fa-play").removeClass("fa-pause");
        $(".position").addClass("d-none");
        $(".volume-down").addClass("d-none");
        $(".volume-value").addClass("d-none");
        $(".volume-up").addClass("d-none");
    }

    function getID(track) {
        $trackid = track.attr("data-id");
        return $trackid;
    }

    function getFile($id) {
        $fileLocation = $('.file[data-id="' + $id + '"]');
        $file = $fileLocation.html();
        return $file;
    }

    function togglePlayPauseButton($id) {
        var targetButton = $('.play[data-id="' + $id + '"]');
        targetButton.toggleClass("fa-play fa-pause");
    }

    function togglePlayPauseTrack($file) {
        /* werkt nog niet */
        /*var audio = new Audio($file);
        audio.load();
        audio.play();*/
    }

    function showControls($id) {
        var position = $('.position[data-id="' + $id + '"]');
        var volumeDown = $('.volume-down[data-id="' + $id + '"]');
        var volumeValue = $('.volume-value[data-id="' + $id + '"]');
        var volumeUp = $('.volume-up[data-id="' + $id + '"]');
        position.removeClass("d-none");
        volumeDown.removeClass("d-none");
        volumeValue.removeClass("d-none");
        volumeUp.removeClass("d-none");
    }

    $(".play").click(function() {
        getID( $(this) );
        getFile($trackid);
        console.log($file);

        var thisPosition = $('.position[data-id="' + $trackid + '"]');
        if (thisPosition.hasClass("d-none")) {
            resetAll();
        }

        togglePlayPauseButton($trackid);
        showControls($trackid);
        /*togglePlayPauseTrack($file);*/
    });



})(jQuery);

