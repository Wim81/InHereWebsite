<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header page-title mb-5">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="entry-content mb-5">
                    <?php $text_about1 = get_field('text1') ?>
                    <p><?php echo $text_about1 ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $image_about1 = get_field('image1');
                $image_about1_url = $image_about1['url'];
                ?>
                <img src="<?php echo $image_about1_url ?>" alt="inhere-about-image" class="w-100 mb-12 mb-md-10">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?php
                $image_about2 = get_field('image2');
                $image_about2_url = $image_about2['url'];
                ?>
                <img src="<?php echo $image_about2_url ?>" alt="inhere-about-image" class="w-100 mb-12 mb-md-10">
            </div>
            <div class="col-md-6">
                <div class="entry-content mb-5">
                    <?php $text_about1 = get_field('text1') ?>
                    <p><?php echo $text_about1 ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="entry-content mb-5">
                    <?php $text_about3 = get_field('text3') ?>
                    <p><?php echo $text_about3 ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $image_about3 = get_field('image3');
                $image_about3_url = $image_about3['url'];
                ?>
                <img src="<?php echo $image_about3_url ?>" alt="inhere-about-image" class="w-100 mb-12 mb-md-10">
            </div>
        </div>

    </div>
</article>