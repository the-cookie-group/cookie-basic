<?php


/**
 *
 */
function ck_load_main_scripts() {
    // Header
    wp_register_script('header-script', get_template_directory_uri() . '/js/header.js', array('ck-jquery'), '1.0.0', true);

    // --
    wp_enqueue_script('header-script');
}
add_action('wp_enqueue_scripts', 'ck_load_main_scripts');


/**
 * 
 */
function ck_load_frontpage_scripts() {
    if (is_front_page()) {
        // Front page script
        wp_register_script('front-page-script', get_template_directory_uri() . '/js/front-page.js', null, '1.0.0', true);
        // --
        wp_enqueue_script('front-page-script');
    }
}
add_action('wp_enqueue_scripts', 'ck_load_frontpage_scripts');