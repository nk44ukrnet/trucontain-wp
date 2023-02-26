<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trucontain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site hb-wrapper">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'trucontain'); ?></a>

    <header id="masthead" class="site-header">
        <div class="__container">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                              rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                             rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $trucontain_description = get_bloginfo('description', 'display');
                if ($trucontain_description || is_customize_preview()) :
                    ?>
                    <p class="site-description"><?php echo $trucontain_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        ?></p>
                <?php endif; ?>

                <div class="header-side">
                    <div class="search simple-form">
                        <?php get_search_form(); ?>
                    </div>
                    <a href="<?php echo wc_get_cart_url(); ?>" class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <sup><?php echo WC()->cart->get_cart_contents_count() ?></sup>
                    </a>
                </div>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" id="hamburgerTrigger" aria-controls="primary-menu"
                        aria-expanded="false"><?php _e('<span>☰</span> Menu', 'trucontain'); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'container' => 'ul'
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
