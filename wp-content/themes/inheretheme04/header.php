<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InHere</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="page">

    <header id="masthead" class="site-header" role="banner">
        <div class="container-max">
            <a href="<?php echo get_site_url(); ?>/index.php" class="header-logo-link">
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/inhere_header_logo.png" alt="site-header-logo" class="header-logo">
            </a>
            <nav id="site-navigation" class="main-navigation c-nav--top" role="navigation">
                <?php
                $args = [
                    'theme_location'        =>  'top-nav'
                ];
                wp_nav_menu( $args );
                ?>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content">
