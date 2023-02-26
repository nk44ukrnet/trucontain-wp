<?php
/*
 * Template Name: Front Page (Home)
 */
get_header();
?>


<?php
$hero_background_image = get_field('hero_background_image');
$hero_h1_text = get_field('hero_h1_text');
$hero_subheading_text = get_field('hero_subheading_text');
$hero_button = get_field('hero_button');

?>
<div class="hb-hero padding-block-lg text-light"
     style="background-image: url(<?php echo $hero_background_image; ?>);">
    <div class="hb-hero__container">
        <?php if (!empty($hero_h1_text)) { ?>
            <h1 class="hb-hero__heading heading"><?php echo $hero_h1_text; ?></h1>
        <?php } ?>
        <?php if (!empty($hero_subheading_text)) { ?>
            <p class="hb-hero__subheading heading-2"><?php echo $hero_subheading_text; ?></p>
        <?php } ?>
        <?php if (!empty($hero_button)) { ?>
            <a href="<?php echo $hero_button['url']; ?>"
               class="btn btn-contrast"><?php echo $hero_button['title']; ?></a>
        <?php } ?>
    </div>

</div>

<div class="hb-our-advantage padding-block">

    <div class="hb-our-advantage__container">

        <?php
        $advantage_button = get_field('advantage_button');

        // Check rows existexists.
        if (have_rows('advantage_repeater')) {
            ?>
            <div class="hb-our-advantage__holder text-center">
                <?php
                // Loop through rows.
                while (have_rows('advantage_repeater')) {
                    the_row();

                    // Load sub field value.
                    $sub_value_img = get_sub_field('icon');
                    $sub_value_heading = get_sub_field('heading');
                    $sub_value_text = get_sub_field('text');
                    // Do something...

                    ?>
                    <div class="hb-our-advantage__item">

                        <?php if (!empty($sub_value_img)) { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/truck-fast-solid.svg"
                                 height="60"
                                 alt="<?php if (!empty($sub_value_heading)) echo $sub_value_heading; ?>" loading="lazy"
                                 class="hb-our-advantage__img">
                        <?php } ?>


                        <?php if (!empty($sub_value_heading)) { ?>
                            <h2 class="hb-our-advantage__title">
                                <?php echo $sub_value_heading; ?>
                            </h2>
                        <?php } ?>

                        <?php if (!empty($sub_value_text)) { ?>
                            <p class="hb-our-advantage__text">
                                <?php echo $sub_value_text; ?>
                            </p>
                        <?php } ?>

                    </div>
                    <?php

                    // End loop.
                }

                ?>
            </div>
        <?php } ?>


        <?php if (!empty($advantage_button)) { ?>
            <div class="text-center">
                <a href="<?php echo $advantage_button['url']; ?>"
                   class="btn block-center"><?php echo $advantage_button['title']; ?></a>
            </div>
        <?php } ?>

    </div>

</div>

<div class="hb-about-us padding-block">
    <div class="hb-about-us__container">
        <?php
        $about_heading = get_field('about_heading');
        $about_text = get_field('about_text');
        ?>

        <?php if (!empty($about_heading)) { ?>
            <h2 class="hb-about-us__heading heading colored2">
                <?php echo $about_heading; ?>
            </h2>
        <?php } ?>

        <?php if (!empty($about_text)) { ?>
            <div class="hb-about-us__text">
                <?php echo $about_text; ?>
            </div>
        <?php } ?>

        <?php
        if (have_rows('about_repeater')) {
            ?>
            <div class="hb-about-us__holder padding-block">
                <?php
                while (have_rows('about_repeater')) {
                    the_row();

                    $sub_field_title = get_sub_field('title');
                    $sub_field_content = get_sub_field('content');
                    ?>
                    <div class="hb-about-us__item">
                        <?php if (!empty($sub_field_title)) { ?>
                        <h3 class="hb-about-us__title"><?php echo $sub_field_title; ?></h3>
                            <?php } ?>
                            <?php if (!empty($sub_field_content)) { ?>
                                <div class="hb-about-us__desc">
                                    <?php echo $sub_field_content; ?>
                                </div>
                            <?php } ?>

                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<div class="hb-popular-categories padding-block">
    <div class="hb-popular-categories__container">
        <?php
        $categories_heading = get_field('categories_heading');
        ?>
        <?php if (!empty($categories_heading)) { ?>
            <h2 class="hb-popular-categories__heading colored2 heading text-center"><?php echo $categories_heading; ?></h2>
        <?php } ?>

        <?php
        if (have_rows('categories_repeater')) {
            ?>
            <div class="hb-popular-categories__holder">
                <?php
                while (have_rows('categories_repeater')) {
                    the_row();
                    $sub_field_category_link = get_sub_field('category_link');
                    ?>

                    <?php if (!empty($sub_field_category_link)) { ?>
                        <a href="<?php echo $sub_field_category_link['url']; ?>"
                           class="hb-popular-categories__link"><?php echo $sub_field_category_link['title']; ?></a>
                    <?php } ?>

                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<div class="hb-testimonials padding-block">
    <div class="hb-testimonials__container">
        <?php
        $testimonials_heading = get_field('testimonials_heading');
        ?>

        <?php if (!empty($testimonials_heading)) { ?>
            <h2 class="hb-testimonials__heading heading text-center colored2">
                <?php echo $testimonials_heading; ?>
            </h2>
        <?php } ?>

        <?php
        if (have_rows('testimonials_repeater')) {
            ?>
            <div class="hb-testimonials__swiper">
                <!-- Slider main container -->
                <div class="swiper hb-swiper-testimonials">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        while (have_rows('testimonials_repeater')) {
                            the_row();
                            $sub_field_author_name = get_sub_field('author_name');
                            $sub_field_number_of_stars = get_sub_field('number_of_stars');
                            $sub_field_text = get_sub_field('text');
                            ?>

                            <div class="swiper-slide">
                                <div class="hb-testimonials__item text-center">
                                    <?php if (!empty($sub_field_author_name)) { ?>
                                        <h3 class="hb-testimonials__title colored2"><?php echo $sub_field_author_name; ?></h3>
                                    <?php } ?>
                                    <?php if (!empty($sub_field_number_of_stars)) { ?>
                                        <div class="hb-testimonials__rating">
                                            <?php for ($i = 0; $i < $sub_field_number_of_stars; $i++) { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star-solid.svg"
                                                     alt="start rating" width="30" loading="lazy">
                                            <?php } ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($sub_field_text)) { ?>
                                        <div class="hb-testimonials__text">
                                            <?php echo $sub_field_text; ?>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- block end -->
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>


<?php
$cta_image_background = get_field('cta_image_background');
$cta_text = get_field('cta_text');
$cta_button = get_field('cta_button');
?>
<div class="hb-cta text-light padding-block-lg"
     style="background-image: url('<?php echo $cta_image_background; ?>');">
    <div class="hb-cta__container">
        <div class="hb-cta__holder">
            <?php if (!empty($cta_text)) { ?>
                <div class="hb-cta__item heading">
                    <?php echo $cta_text; ?>
                </div>
            <?php } ?>

            <?php if (!empty($cta_button)) { ?>
                <div class="hb-cta__item">
                    <a href="<?php echo $cta_button['url'] ?>"
                       class="btn btn-contrast2"><?php echo $cta_button['title']; ?></a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<div class="hb-featured-products padding-block">

    <div class="hb-featured-products__container">

        <?php $featured_products_title = get_field('featured_products_title'); ?>
        <?php if (!empty($featured_products_title)) { ?>
            <h2 class="hb-featured-products__heading heading colored2 text-center"><?php echo $featured_products_title; ?></h2>
        <?php } ?>

        <?php
        if (have_rows('featured_products')) {
            ?>
            <div class="hb-featured-products__holder">

                <!-- Slider main container -->
                <div class="swiper hb-swiper-featured-products">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                        while (have_rows('featured_products')) {
                            the_row();
                            $sub_field_product = get_sub_field('product');

                            $image_id = get_post_thumbnail_id($sub_field_product->ID);
                            $image_data = wp_get_attachment_image_src($image_id, 'full');
                            $image_url = $image_data[0];
                            ?>

                                                     <div class="swiper-slide">
                                                         <div class="hb-featured-products__item">
                                                             <img src="<?php echo $image_url; ?>"
                                                                  alt="<?php echo $sub_field_product->post_title; ?>" loading="lazy" class="hb-featured-products__img">
                                                             <a href="<?php echo $sub_field_product->guid; ?>">
                                                                 <span class="hb-featured-products__title"><?php echo $sub_field_product->post_title; ?></span>
                                                             </a>

                                                             <a href="<?php echo $sub_field_product->guid; ?>"
                                                                class="hb-featured-products__btn">Learn more</a>
                                                         </div>
                                                     </div>

                            <!--    Items -->
                            <?php
                        }
                        ?>
                        <!-- block end -->
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

</div>


<?php get_footer(); ?>
