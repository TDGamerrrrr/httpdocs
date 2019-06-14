<?php

/**
 * Enqueue the parent theme stylesheet.
 */

function north_enqueue_parent_style() {
    wp_enqueue_style( 'siteorigin-north-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'north_enqueue_parent_style', 8 );