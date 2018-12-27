<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="page">

    <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
            <p class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </p>
            <p class="site-description">
                <?php bloginfo( 'description' ); ?>
            </p>
        </div>

        <nav id="site-navigation" class="main-navigation c-nav--top" role="navigation">
            <?php
            $args = [
                'theme_location'        =>  'top-nav'
            ];
            wp_nav_menu( $args );
            ?>
        </nav>
    </header>

    <div id="content" class="site-content">
