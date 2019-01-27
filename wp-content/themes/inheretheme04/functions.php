<?php

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in CSS
function inhere04_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'inhere04_enqueue_styles' );


// Register Manu Locations
register_nav_menus([
    'top-nav'   => esc_html__( 'Top Navigation', 'inhere04' ),
    'test-nav'  => esc_html__( 'Test Navigation', 'inhere04' )
]);

?>