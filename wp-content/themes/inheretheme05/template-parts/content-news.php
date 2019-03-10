<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container content-container">

        <div class="row">
            <div class="col-12">
                <header class="entry-header page-title mb-5">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
            </div>
        </div>

        <div class="row content-box">
            <div class="col-12">

                <p class="news--byline mb-5">
                    <span class="news--author">by <?php the_author(); ?>, </span>
                    <span class="news--date"><?php the_date('jS F Y'); ?></span>
                </p>


                <div class="entry-content">
                    <?php
                        $image = get_field('news_item_image');
                    if ( !empty($image) ): ?>
                        <img src="<?php echo $image; ?>" class="col-5 news-item-img">
                    <?php endif; ?>

                    <p class="news--text mb-5"><?php echo get_the_content(); ?></p>

                </div>

                <div>
                    <a href="<?php bloginfo('url'); ?>/news/" class="back-to-news fas fa-angle-double-left">back</a>
                </div>

            </div>
        </div>
    </div>
</article>