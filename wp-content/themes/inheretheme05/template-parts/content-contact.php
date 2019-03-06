<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container content-container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header page-title mb-5">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
            </div>
        </div>
        <div class="row content-box content-box-about">
            <div class="col-12 mb-5">
                <p class="about-intro-text">
                    So, you’ve decided you want to leave me a message? Really? Well, you’re in luck, I have included a form here which allows you to do just that! If you wish to receive a response, please stay polite. If you do not wish to receive a response, you can basically do whatever you like. But remember you would be using up energy which you could have used to improve your life. Deep, isn’t it? No it isn’t.
                </p>
            </div>
            <div class="col-md-6">
                <div class="entry-content mb-5 form-container">
                    <?php echo do_shortcode("[contact-form-7 id=\"26\" title=\"Contact form 1\"]"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $image_contact = get_field('main_image');
                $image_contact_url = $image_contact['url'];
                ?>
                <img src="<?php echo $image_contact_url ?>" alt="inhere-contact-image" class="w-100 mb-12 mb-md-10">
            </div>
        </div>
    </div>
</article>