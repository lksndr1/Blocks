<?php

/**
 * Enqueue scripts and styles.
 */
function _themeprefix_theme_scripts() {
    $version = wp_get_theme()->get( 'Version' );

    // styles
    wp_register_style('section-green', get_stylesheet_directory_uri() . '/inc/acf/blocks/section-green/section-green.css');
    wp_register_style('section-red', get_stylesheet_directory_uri() . '/inc/acf/blocks/section-red/section-red.css');
}
add_action( 'wp_enqueue_scripts', '_themeprefix_theme_scripts' );


// Initializing aсf blocks for gutenberg
require_once get_template_directory() . '/inc/acf/blocks/blocks-init.php';

