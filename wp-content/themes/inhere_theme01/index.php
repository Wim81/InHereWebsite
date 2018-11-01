<?php


?>



<html>
<head>
    <?php wp_head(); ?>
    <!-- dit is niet de beste manier van stylesheets linken, later nog aanpassen (moet in js file gebeuren) -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>
<body>

<h1>InHere Theme Templaaaaaaaate!</h1>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title( '<h3>', '</h3>' );
        the_content();
    }
}
wp_footer();
?>
</body>
</html>