<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container album-detail">
        <div class="row">
            <div class="col-12">
                <header class="entry-header mb-5">
                        <h1><?php the_title(); ?>
                        </h1>
                </header>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="<?php echo get_field('front_image'); ?>" alt="album cover" class="album-detail--image">
            </div>
            <div class="col-md-6">
                <p class="album-detail--info">
                    <?php echo get_field('additional_info'); ?>
                </p>
            </div>
        </div>
        <div class="row mb-5">

        </div>

                <div class="entry-content">


                    <?php $this_album_tracks = get_posts(array(
                       'post_type' => 'track',
                        'meta_query' => array(
                                array(
                                    'key' => 'album',
                                    'value' => '"' . get_the_ID() . '"',
                                    'compare' => 'LIKE'
                                )
                        ),
                        'meta_key' =>'rank',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    )); ?>

                    <?php if ( $this_album_tracks ) {
                        echo '<div class="all-tracks">';

                            foreach ( $this_album_tracks as $track ) {
                            $track_title = get_the_title( $track->ID );
                            $track_rank = get_post_meta( $track->ID, 'rank', true );
                            $track_duration = get_post_meta( $track->ID, 'duration', true );
                            $track_file = get_post_meta( $track->ID, 'file', true );
                            $track_file_location = wp_get_attachment_url($track_file);

                            echo '<div>' . $track_file_location . '</div>';
                            echo '<div>' . $track_rank . '</div>';
                            echo '<div>' . $track_title . '</div>';
                            echo '<div>' . $track_duration . '</div>';
                            }
                        echo '</div>';
                    } ?>



                    <div style="color:green;">
                        <?php echo  ( print_r($this_album_tracks) ); ?>
                    </div>

                    <?php foreach ($this_album_tracks as $track) {
                        echo esc_html__($track->post_title);
                        echo '</br>';

                    } ?>

                </div>

                    <a href="<?php bloginfo('url'); ?>/discography/" class="back-to-discography fas fa-angle-double-left">back</a>
            </div>
        </div>
    </div>
</article>