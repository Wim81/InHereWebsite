<div class="col-12 news-teaser">
    <a href="<?php the_permalink() ?>" class="link-news-item">
        <article id="post-<?php the_ID(); ?>" <?php post_class("content-box content-box-news-teaser"); ?> >
            <div class="content-box--inner"></div>
            <h2 class="news-title mb-2"><?php the_title(); ?></h2>

            <p class="news--byline mb-5">
                <span class="news--author">by <?php the_author(); ?>, </span>
                <span class="news--date"><?php the_date('jS F Y'); ?></span>
            </p>

            <div class="entry-content">
                <?php // the_post_thumbnail( 'full' ); ?>
                <?php // the_field('') ?>

                <?php
                $image = get_field('news_item_image');
                if ( !empty($image) ): ?>
                    <img src="<?php echo $image; ?>">
                <?php endif; ?>

                <div class="news-teaser--right">
                    <div class="news--excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                    <div class="readmore">View More</div>
                </div>
            </div>
        </article>
    </a>
</div>



