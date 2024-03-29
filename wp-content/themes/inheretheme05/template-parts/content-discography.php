<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container content-container album-detail">

        <div class="row">
            <div class="col-12">
                <header class="entry-header page-title mb-5">
                    <?php the_title( '<h1 class="news-title">', '</h1>' ); ?>
                </header>
            </div>
        </div>

        <div class="row mb-7">
            <div class="col-md-5">
                <img src="<?php echo get_field('front_image_420'); ?>" alt="album cover" class="album-detail--image">
            </div>
            <div class="col-md-7">
                <p class="album-detail--info">
                    <?php echo get_field('additional_info'); ?>
                </p>
            </div>
        </div>

        <div class="player-intro">Please note it may take a couple of seconds for the tracks to load, depending on your connection</div>

        <?php the_content(); ?>

        <div class="back-to-discography--wrapper">
            <a href="<?php bloginfo('url'); ?>/discography/" class="back-to-discography">back</a>
        </div>

    </div>
</article>