<?php
// functions.php

// Enqueue styles and scripts
function autocraft_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'autocraft_enqueue_styles');

// Register custom post type for gallery
function autocraft_register_gallery_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Gallery',
            'singular_name' => 'Gallery Item',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'autocraft-gallery'), // changed from 'gallery' to avoid conflict
    );
    register_post_type('gallery', $args);
}

add_action('init', 'autocraft_register_gallery_post_type');

// Add theme support for featured images
function autocraft_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'autocraft_setup');
?>