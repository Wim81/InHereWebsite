<div class="col-md-6 news-teaser mb-4 pr-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class("content-box"); ?> >
        <a href="<?php the_permalink() ?>" class="link-news-item">
            <h2 class="news-title mb-0"><?php the_title(); ?></h2>
        </a>
        <p class="news--byline">
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

            <p class="news--excerpt">
                <?php echo get_the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" class="view-more">view more</a>
            </p>

        </div>
    </article>
</div>
