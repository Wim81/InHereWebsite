<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>
                <h1>YEAZAAAAh!!!!!</h1>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <p>source: single-news.php</p>

        </main>

    </div>

<?php get_footer(); ?>