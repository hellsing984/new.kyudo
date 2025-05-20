<?php

function samurai_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'samurai_theme_setup');

function samurai_theme_enqueue_styles() {
    wp_enqueue_style('samurai-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'samurai_theme_enqueue_styles');

function create_event_post_type() {
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('Événements'),
                'singular_name' => __('Événement')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'create_event_post_type');

function register_my_menu() {
    register_nav_menu('primary', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

?>
