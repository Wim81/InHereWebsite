<div class="col-6 col-md-3 discography-teaser">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
        $image = get_field('front_image_245');
        $year = get_field('year');
        $position = get_field('position_in_year');
        ?>

        <a href="<?php the_permalink() ?>" class="discography-teaser--link" style="background-image: url(<?php echo $image; ?>);">
            <div class="discography-teaser--data">
                <p class="discography-teaser--title"><?php the_title(); ?></p>
                <p class="discography-teaser--year"><?php echo $year; ?></p>
            </div>
        </a>

    </article>
</div>
