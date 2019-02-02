<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <header class="entry-header mb-5">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
                <div class="entry-content mb-5 form-container">
                    <?php echo do_shortcode("[contact-form-7 id=\"26\" title=\"Contact form 1\"]"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $image_about = get_field('main_image');
                $image_about_url = $image_about['url'];
                ?>
                <img src="<?php echo $image_about_url ?>" alt="inhere-contact-image" class="w-100 mb-12 mb-md-10">
            </div>
        </div>
    </div>
</article>