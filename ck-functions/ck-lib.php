<?php


/**
 *
 */
function ck_lib_scripts() {
    // Scripts
    //--- Bootstrap
    wp_register_script('ck-bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.js', array('ck-jquery'), '4.3.1', true);
    //--- JQuery
    wp_register_script('ck-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, '3.4.1', true);

    // All
    wp_enqueue_script('ck-jquery');
    wp_enqueue_script('ck-bootstrap');

}
add_action('wp_enqueue_scripts', 'ck_lib_scripts');


/**
 * 
 */
function ck_lib_style() {
    // Bootstrap
    wp_enqueue_style('bootstrap-stylesheet', get_template_directory_uri() . '/style/lib/bootstrap.css');
    // Google fonts
    wp_enqueue_style('google-fonts-stylesheet', 'https://fonts.googleapis.com/css?family=Roboto');
    // Cookie queries
    wp_enqueue_style('cookie-queries-stylesheet',  get_template_directory_uri() . '/style/lib/cookie-queries.css');
}
add_action('wp_enqueue_scripts', 'ck_lib_style');

