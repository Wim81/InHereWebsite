(function($) {

    /* huidig jaartal in footer */
    var thisDate = new Date();
    var thisYear = thisDate.getFullYear();
    $("#current_year").html(thisYear);

    /* resize textarea contact form */
    $('#your-message').autoResize();

})(jQuery);

