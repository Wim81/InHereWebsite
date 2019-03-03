<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container album-detail">
        <div class="row">
            <div class="col-12">
                <header class="entry-header mb-5">
                        <h1><?php the_title(); ?>
                        </h1>
                </header>
            </div>
        </div>
        <div class="row mb-7">
            <div class="col-md-6">
                <img src="<?php echo get_field('front_image'); ?>" alt="album cover" class="album-detail--image">
            </div>
            <div class="col-md-6">
                <p class="album-detail--info">
                    <?php echo get_field('additional_info'); ?>
                </p>
            </div>
        </div>

        <?php the_content(); ?>

        <a href="<?php bloginfo('url'); ?>/discography/" class="back-to-discography fas fa-angle-double-left mt-4">back</a>

    </div>
</article>