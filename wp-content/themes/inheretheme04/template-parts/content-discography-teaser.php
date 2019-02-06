<div class="col-md-3 news-teaser">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink() ?>" class="link-discography-item">

            <?php
            $image = get_field('front_image');
            $image_url = $image['url'];
            ?>
            <img src="<?php echo $image_url; ?>">

        </a>

    </article>
</div>
