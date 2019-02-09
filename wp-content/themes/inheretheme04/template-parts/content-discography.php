<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header mb-3">
                        <h1><?php the_title(); ?>
                        </h1>
                </header>

                <div class="entry-content">


                    <?php
                        $id = get_the_ID();
                        print_r($id);
                    ?>

                    <?php
                    // Set up the objects needed
                    $my_wp_query = new WP_Query();
                    $all_wp_discs = $my_wp_query->query(array('post_type' => 'discography'));
                    ?>
                    <div style="color:red;">
                    <?php echo  ( print_r($all_wp_discs) ); ?>

                    <?php
                    //$all_wp_tracks = $my_wp_query->query(array('post_type' => 'track'));
                    ?>

                    <?php $all_wp_tracks = get_posts(array(
                       'post_type' => 'track',
                        'meta_query' => array(
                                array(
                                    'key' => 'album',
                                    'value' => '"' . get_the_ID() . '"',
                                    'compare' => 'LIKE'
                                )
                        )
                    )); ?>

                    <div style="color:green;">
                        <?php echo  ( print_r($all_wp_tracks) ); ?>
                    </div>
                    <?php

                    // de rest hieronder nog aan te passen, you will figure it out!

                    // Get the page as an Object
                    $portfolio =  get_page_by_title('Portfolio');

                    // Filter through all pages and find Portfolio's children
                    $portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );

                    // echo what we get back from WP to the browser
                    echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
                    ?>

                    <?php the_meta(); ?>
                </div>

                <div>
                    <a href="<?php bloginfo('url'); ?>/discography/" class="back-to-discography fas fa-angle-double-left">back</a>
                </div>

            </div>
        </div>
    </div>
</article>