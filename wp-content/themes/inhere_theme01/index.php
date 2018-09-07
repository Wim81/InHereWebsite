<?php


?>

<html>
<head>
    <?php wp_head(); ?>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>
<body>
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