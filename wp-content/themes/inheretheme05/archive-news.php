<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <div class="container content-container">

                <div class="row">
                    <div class="col-12">
                        <header class="entry-header page-title mb-5">
                            <h1>Latest News</h1>
                        </header>
                    </div>
                </div>

                <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'news-teaser' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

                </div>
            </div>

        </main>

    </div>

<?php get_footer(); ?>