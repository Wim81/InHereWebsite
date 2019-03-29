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

/*  preloading of images to avoid "flickering" effect when hovering over work items for first time  */

var images = [];
function preload() {
    for (var i = 0; i < arguments.length; i++) {
        images[i] = new Image();
        images[i].src = preload.arguments[i];
        console.log("preload ok");
    }
}

//-- usage --//
preload(
    "wp-content/themes/inheretheme05/img/CTA_desktop_1_hover.png",
    "wp-content/themes/inheretheme05/img/CTA_desktop_1_normal.png",
    "wp-content/themes/inheretheme05/img/CTA_desktop_2_hover.png",
    "wp-content/themes/inheretheme05/img/CTA_desktop_2_normal.png",
    "wp-content/themes/inheretheme05/img/CTA_mobile_1_hover.png",
    "wp-content/themes/inheretheme05/img/CTA_mobile_1_normal.png",
    "wp-content/themes/inheretheme05/img/CTA_mobile_2_hover.png",
    "wp-content/themes/inheretheme05/img/CTA_mobile_2_normal.png",
    "wp-content/themes/inheretheme05/img/inhere_gradient-title.jpg",
    "wp-content/themes/inheretheme05/img/inhere_header_logo.png",
    "wp-content/themes/inheretheme05/img/inhere_home_gradient.jpg",
    "wp-content/themes/inheretheme05/img/inhere_home_gradient_mask_top.jpg",
    "wp-content/themes/inheretheme05/img/inhere_home_gradient_mask_top.png",
    "wp-content/themes/inheretheme05/img/inhere_home_hero.jpg",
    "wp-content/themes/inheretheme05/img/inhere_homepage_logo_eq_cropped2.png",
    "wp-content/themes/inheretheme05/img/Logo_inheresite_design02_orange.png"
);

