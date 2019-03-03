<?php

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in CSS & JS
function inhere05_enqueue_styles_scripts() {
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css', [], time(), 'all' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    wp_enqueue_script( 'textarea-resize-js', get_stylesheet_directory_uri() . '/textarea-resize.js', [], time(), 'all' );
    wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/script.js', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'inhere05_enqueue_styles_scripts' );

// Register Manu Locations
register_nav_menus([
    'top-nav'   => esc_html__( 'Top Navigation', 'inhere05' ),
    'test-nav'  => esc_html__( 'Test Navigation', 'inhere05' )
]);

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>



