<?php

//user code
function theme_files() {

    wp_register_script('swiper-js', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), NULL, '1', true);
    wp_register_script('main-js', get_theme_file_uri('/assets/js/main.js'), NULL, filemtime(get_template_directory() . '/assets/js/main.js'), true);

    wp_register_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', NULL, '1', 'all');
    wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', NULL, '1', 'all');
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;900&display=swap', NULL, '1', 'all');
    wp_register_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', NULL, filemtime(get_template_directory() . '/assets/css/swiper-bundle.css'), 'all');
    wp_register_style('main-styles', get_template_directory_uri() . '/assets/css/all.css', NULL, filemtime(get_template_directory() . '/assets/css/all.css'), 'all');


    wp_enqueue_script('swiper-js');
    wp_enqueue_script('main-js');

    wp_enqueue_style('normalize');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('swiper-style');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('main-styles');


    wp_localize_script('main-university-js', 'universityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'theme_files');