<?php
// Register menu
function simple_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'simple-theme')
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');

// Enqueue style.css
function simple_theme_enqueue_styles() {
    wp_enqueue_style('simple-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'simple_theme_enqueue_styles');

// Add support for featured images
add_theme_support('post-thumbnails');
?>
