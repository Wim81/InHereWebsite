(function($) {

    /* huidig jaartal in footer */
    var thisDate = new Date();
    var thisYear = thisDate.getFullYear();
    $("#current_year").html(thisYear);

    /* resize textarea contact form */
    $('#your-message').autoResize();

    /* resize news item title text wanneer muy grande! */
    var lengthNewsTitle = $(".news-title").text().length;

    function news_title() {
        if ( $(window).width() >= 991) {
            if ( lengthNewsTitle > 50 ) {
                $("h1.news-title").css("font-size", "3rem");
                $("h1.news-title").css("line-height", "2.8rem");
            } else if ( lengthNewsTitle > 100 ) {
                $("h1.news-title").css("font-size", "2rem");
                $("h1.news-title").css("line-height", "1.8rem");
            }
        } else if ( $(window).width() >= 767) {
            if ( lengthNewsTitle > 50 ) {
                $("h1.news-title").css("font-size", "2rem");
                $("h1.news-title").css("line-height", "1.8rem");
            } else if ( lengthNewsTitle > 100 ) {
                $("h1.news-title").css("font-size", "1.4rem");
                $("h1.news-title").css("line-height", "1.3rem");
            }
        } else {
            if ( lengthNewsTitle > 50 ) {
                $("h1.news-title").css("font-size", "1.6rem");
                $("h1.news-title").css("line-height", "1.5rem");
            } else if ( lengthNewsTitle > 100 ) {
                $("h1.news-title").css("font-size", "1.2rem");
                $("h1.news-title").css("line-height", "1.1rem");
            }
        }
    }
    news_title();

    $( window ).resize(function() {
        news_title();
    });

})(jQuery);

