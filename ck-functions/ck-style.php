<?php

/**
 * 
 */
function ck_load_style() {
    // Main CSS
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style/main.css');
    // Footer CSS
    wp_enqueue_style('footer-stylesheet', get_template_directory_uri() . '/style/footer.css');
    // Header CSS
    wp_enqueue_style('header-stylesheet', get_template_directory_uri() . '/style/header.css');
}
add_action('wp_enqueue_scripts', 'ck_load_style');


/**
 * 
 */
function ck_load_frontpage_styles() {
    if (is_front_page()) {
        wp_enqueue_style('front-page-stylesheet', get_template_directory_uri() . '/style/front-page.css');
    }
}
add_action('wp_enqueue_scripts', 'ck_load_frontpage_styles');
