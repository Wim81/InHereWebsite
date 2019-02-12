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
        <div class="row mb-7">
            <div class="col-md-6">
                <img src="<?php echo get_field('front_image'); ?>" alt="album cover" class="album-detail--image">
            </div>
            <div class="col-md-6">
                <p class="album-detail--info">
                    <?php echo get_field('additional_info'); ?>
                </p>
            </div>
        </div>

        <div class="entry-content mb-5">

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
                'posts_per_page' => -1
            )); ?>

            <?php if ( $this_album_tracks ) : ?>

                <div class="all-tracks col-md-10 offset-md-1">

                    <?php foreach  ($this_album_tracks as $track) :
                    $track_title = get_the_title( $track->ID );
                    $track_rank = get_post_meta( $track->ID, 'rank', true );
                    $track_duration = get_post_meta( $track->ID, 'duration', true );
                    $track_file = get_post_meta( $track->ID, 'file', true );
                    $track_file_location = wp_get_attachment_url($track_file); ?>

                    <div class="single-track track-listing track-<?php echo $track->ID; ?> d-flex flex-row justify-content-between align-items-top">
                        <!--
                        <audio controls class="single-track--audio">
                            <source src="<?php echo $track_file_location; ?>">
                        </audio>
                        -->
                        <div class="single-track--audio">
                            <i class="fas fa-play play"></i>
                            <!-- pause laten alterneren met play, heeft dus ook niet eigen markup nodig -->
                            <i class="fas fa-pause pause d-none"></i>
                            <!-- progress slider enkel tonen vanaf dat play is ingedrukt -->
                            <span class="slidecontainer single-track--progress position d-none">
                                <input type="range" min="1" max="100" value="50" class="slider">
                            </span>
                            <i class="fas fa-volume-down volume-down d-none"></i>
                            <div class="volume-value d-none"></div>
                            <i class="fas fa-volume-up volume-up d-none"></i>
                        </div>

                        <div class="single-track--rank pl-3 pt-3">
                            <?php
                                if ($track_rank < 10) {
                                    echo '0' . $track_rank . '.';
                                } else {
                                    echo $track_rank . '.';
                                }
                            ?>
                        </div>

                        <div class="single-track--title pl-3 pt-3">
                            <?php echo $track_title; ?>
                        </div>

                        <div class="single-track--duration pl-3 pt-3 text-right">
                            <?php
                                if ( substr($track_duration, 1, 1) == "'" ) {
                                    echo '0' . $track_duration;
                                } else {
                                    echo $track_duration;
                                } ?>
                        </div>

                    </div>

                    <?php endforeach; ?>

                </div>;

            <?php endif; ?>

        </div>

                    <a href="<?php bloginfo('url'); ?>/discography/" class="back-to-discography fas fa-angle-double-left">back</a>
            </div>
        </div>
    </div>
</article>