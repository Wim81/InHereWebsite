<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <div class="container content-container">

                <div class="row">
                    <div class="col-12">
                        <header class="entry-header page-title mb-5">
                            <h1>Discography</h1>
                        </header>
                    </div>
                </div>

                <div class="row no-gutters">

            <?php

            $discography_order = array(
                'post_type' => 'discography',
                'meta_query' => array(
                    'relation' => 'AND',
                    'year_condition' => array(
                        'key'     => 'year',
                        'compare' => 'EXISTS',
                    ),
                    'position_condition' => array(
                        'key'     => 'position_in_year',
                        'compare' => 'EXISTS',
                    ),
                ),
                'orderby' => array(
                    'year_condition' => 'ASC',
                    'position_condition' => 'ASC',
                ),
            );

            $discography_query = new WP_Query( $discography_order );

            if ( $discography_query->have_posts() ) : while ( $discography_query->have_posts() ) : $discography_query->the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'discography-teaser' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

                </div>
            </div>

        </main>

    </div>

<?php get_footer(); ?>