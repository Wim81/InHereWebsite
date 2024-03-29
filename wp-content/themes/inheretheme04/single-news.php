<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main pt-5 pt-md-7 mb-10" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'news' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </main>

    </div>

<?php get_footer(); ?>