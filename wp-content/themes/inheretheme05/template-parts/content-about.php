<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header mb-5">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="entry-content mb-5">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $image_about = get_field('main_image');
                $image_about_url = $image_about['url'];
                ?>
                <img src="<?php echo $image_about_url ?>" alt="inhere-about-image" class="w-100 mb-12 mb-md-10">
            </div>
        </div>
    </div>
</article>