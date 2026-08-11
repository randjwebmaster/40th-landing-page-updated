<?php

require_once get_template_directory() . '/inc/cpt.php';
require_once get_template_directory() . '/inc/meta-boxes.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/seed-data.php';

function my_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'my-theme' ),
        'id'            => 'primary-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'my-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

function my_theme_enqueue_scripts() {
    wp_enqueue_style(
        'my-theme-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'my-theme-landing',
        get_template_directory_uri() . '/assets/css/landing.css',
        array( 'my-theme-fonts' ),
        '1.0.0'
    );
    wp_enqueue_style(
        'my-theme-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_script(
        'my-theme-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'my-theme-tagline',
        get_template_directory_uri() . '/assets/js/tagline.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'my-theme-era-scroll',
        get_template_directory_uri() . '/assets/js/era-scroll.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

function my_theme_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'my_theme_preconnect_fonts', 1 );
