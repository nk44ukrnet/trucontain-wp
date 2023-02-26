<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trucontain
 */

?>


<footer class="hb-footer">
    <div class="hb-footer__container">
        <div class="hb-footer__holder">
            <div class="hb-footer__item">
                <div class="hb-footer__cell">
                    <?php
                    $footer_heading_1 = get_field('column_1_heading', 'options');
                    $column_1_block_1_link = get_field('column_1_block_1_link', 'options');
                    ?>
                    <?php if (!empty($footer_heading_1)) { ?>
                        <h2 class="hb-footer__title"><?php echo $footer_heading_1; ?></h2>
                    <?php } ?>
                    <?php if (!empty($column_1_block_1_link)) { ?>
                        <a href="<?php echo $column_1_block_1_link['url']; ?>"><?php echo $column_1_block_1_link['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="hb-footer__cell">
                    <?php
                    $column_1_heading_2 = get_field('column_1_heading_2', 'options');
                    $column_1_block_2_link = get_field('column_1_block_2_link', 'options');
                    ?>
                    <?php if (!empty($column_1_heading_2)) { ?>
                        <h2 class="hb-footer__title"><?php echo $column_1_heading_2; ?></h2>
                    <?php } ?>

                    <?php if (!empty($column_1_block_2_link)) { ?>
                        <a href="<?php echo $column_1_block_2_link['url']; ?>"><?php echo $column_1_block_2_link['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="hb-footer__cell">
                    <?php
                    $column_1_heading_3 = get_field('column_1_heading_3', 'options');
                    $column_1_block_3_html = get_field('column_1_block_3_html', 'options');
                    ?>
                    <?php if (!empty($column_1_heading_3)) { ?>
                        <h2 class="hb-footer__title"><?php echo $column_1_heading_3; ?></h2>
                    <?php } ?>
                    <?php if ( !empty($column_1_block_3_html) ) { ?>
                    <?php echo $column_1_block_3_html; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="hb-footer__item">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'container' => 'ul'
                    )
                );
                ?>
            </div>
            <div class="hb-footer__item">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-3',
                        'container' => 'ul'
                    )
                );
                ?>
            </div>
            <div class="hb-footer__item">
                <div class="text-center">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="hb-footer__cell">
                    <?php
                    $column_3_heading_1 = get_field('column_3_heading_1', 'options');
                    $column_3_subscribe_form_shortcode = get_field('column_3_subscribe_form_shortcode', 'options');
                    ?>
                    <?php if (!empty($column_3_heading_1)) { ?>
                        <h2 class="hb-footer__title"><?php echo $column_3_heading_1; ?></h2>
                    <?php } ?>

                    <?php if (!empty($column_3_subscribe_form_shortcode)) { ?>
                        <div class="simple-form">
                            <?php echo do_shortcode($column_3_subscribe_form_shortcode); ?>
                        </div>
                    <?php } ?>

                </div
            </div>
        </div>

    </div>
    <div class="hb-footer__copyright">
        <?php
        $footer_copyright_text = get_field('footer_copyright_text', 'options');
        ?>
        <div class="__container text-center">
            &copy; <?php echo Date("Y"); ?> <?php echo $footer_copyright_text; ?>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
