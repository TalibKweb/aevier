<?php

/**
 * Template Name: Home Page Temp
 */
get_header();
?>



<!-- Hero-Section -->
<section class="hero-section">
    <a href="<?php echo site_url() ?>"><img src="<?php echo get_field('header_logo', 'option')['url'] ?>" alt="Aevier Logo" class="hero-logo img-fluid "></a>

    <div class="hero-text-section">
        <div class="text-content">
            <?php if (get_field('spotlight_title')): ?>
                <h1 class="hero-heading roadradio-text"><?php echo the_field('spotlight_title') ?></h1>
            <?php endif; ?>

            <?php if (get_field('spotlight_title_2')): ?>
                <h1 class="hero-heading roadradio-text ms-4 hero-subhead"><?php echo the_field('spotlight_title_2') ?></h1>
            <?php endif; ?>

            <?php if (get_field('spotlight_desc')): ?>
                <p class="hero-subheading swissblack text-white"><?php echo the_field('spotlight_desc') ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>


<section class="intro-section mx-auto justify-content-center align-items-center ">

    <?php if (get_field('brand_intro_desc')): ?>
        <p class="text-center swiss-regular intro-text text-black mb-0 py-5 px-lg-0 px-md-4"><?php echo the_field('brand_intro_desc') ?></p>
    <?php endif; ?>

    <!-- <p class="text-center swiss-regular intro-text text-black mb-0 py-5 px-lg-0 px-md-4">We are pleased to introduce <span class="text-golden">AEVIER,</span> a distinctive brand under MTJ World India Pvt. Ltd., specializing in the value enhancement of premium men’s and women’s accessories. Our expertise lies in adorning high-end accessories—such as watches, eyewear, pens, buckles etc.—with natural diamonds, elevating their appeal and exclusivity.</p> -->
</section>


<!-- <div class="intro-image-container">
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe
            src="https://player.vimeo.com/video/1111196921?h=6328c131f2&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            style="position:absolute;top:0;left:0;width:100%;height:100%;"
            title="Craftmenship Video Without Logo"></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
</div> -->

<!-- <div class="py-4  " style="background-color: aqua;" ></div> -->

<div class="intro-image-container">
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe
            src="<?php echo get_field('full_width_video_url') ?>"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            style="position:absolute;top:0;left:0;width:100%;height:100%;"
            title="Craftmenship Video Without Logo"></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
</div>


<section class="aevier-collections py-5">
    <div class="container">
        <div class="text-center pb-5">

            <?php if (get_field('collection_title')): ?>
                <h3><?php echo the_field('collection_title') ?></h3>
            <?php endif; ?>

        </div>

        <?php
        $sectors_posts_arr = [
            'post_type' => 'collections',
            'posts_per_page' => -1,
            'order_by' => 'date',
            'order' =>  'ASC'
        ];

        $sectors_fetch_query = new WP_Query($sectors_posts_arr);

        if ($sectors_fetch_query->have_posts()):
            while ($sectors_fetch_query->have_posts()): $sectors_fetch_query->the_post();
        ?>
                <div class="row align-items-center collections pb-5">
                    <div class="col-md-7">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                    </div>
                    <div class="col-md-5 position-relative">
                        <div class="collection-content p-2 swiss-regular">

                            <div class="textContent">
                                <h3><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h3>
                                <p><?php echo get_field('subtitle') ?></p>
                            </div>

                            <p><?php echo the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        else:
            ?>

            <h3>No Collections Found!</h3>

        <?php endif; ?>

    </div>
</section>



<?php
get_footer();
?>