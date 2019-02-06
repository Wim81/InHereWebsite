<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main pt-5 pt-md-7 mb-10" role="main">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <header class="entry-header mb-5">
                            <h1 class="discography-archive-title">Discography</h1>
                        </header>
                    </div>
                </div>
                <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'discography-teaser' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

                </div>
            </div>

        </main>

    </div>

<?php get_footer(); ?>