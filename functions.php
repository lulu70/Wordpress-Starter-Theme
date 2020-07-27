<?php

add_action('wp_enqueue_scripts', 'load_files');

function load_files()
{
    //Put your local url path instead of [YOUR_LOCAL_URL]
    if (strstr($_SERVER['SERVER_NAME'], '[YOUR_LOCAL_URL]')) {
        wp_enqueue_script('main_js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('main_js', get_theme_file_uri('/bundled-assets/scripts.2fd9d43415b95f9a7593.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/undefined'));
    }
}
