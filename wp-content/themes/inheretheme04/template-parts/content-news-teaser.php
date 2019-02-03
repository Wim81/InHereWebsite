<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink() ?>">
            <h2 class="news-title"><?php the_title(); ?></h2>
        </a>
        <p class="news--byline">
            <span class="news--author">by <?php the_author(); ?>, </span>
            <span class="news--date"><?php the_date('jS F Y'); ?></span>
        </p>
    </header>

    <div class="entry-content">
        <?php // the_post_thumbnail( 'full' ); ?>
        <?php // the_field('') ?>

        <?php
            $image = get_field('news_item_image');
        if ( !empty($image) ): ?>
            <img src="<?php echo $image; ?>" style="width: 150px;">
        <?php endif; ?>

        <p class="news--excerpt"><?php echo get_the_excerpt(); ?></p>

    </div>
</article>