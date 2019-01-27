<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

                <?php // the_meta(); ?>
                <?php
                    $image_about = get_field('main_image');
                    $image_about_url = $image_about['url'];
                ?>
                <img src="<?php echo $image_about_url ?>" alt="inhere-about-image">

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <p>source: page-about.php</p>

        </main>

    </div>

<?php get_footer(); ?>