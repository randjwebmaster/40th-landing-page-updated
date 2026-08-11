<?php

function rj_register_post_types() {

    register_post_type( 'rj_stat', array(
        'labels'       => array(
            'name'          => __( 'Stats', 'my-theme' ),
            'singular_name' => __( 'Stat', 'my-theme' ),
            'add_new_item'  => __( 'Add New Stat', 'my-theme' ),
            'edit_item'     => __( 'Edit Stat', 'my-theme' ),
            'all_items'     => __( 'All Stats', 'my-theme' ),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array( 'title', 'page-attributes' ),
        'menu_icon'    => 'dashicons-chart-bar',
        'rewrite'      => false,
    ) );

    register_post_type( 'rj_era', array(
        'labels'       => array(
            'name'          => __( 'Eras', 'my-theme' ),
            'singular_name' => __( 'Era', 'my-theme' ),
            'add_new_item'  => __( 'Add New Era', 'my-theme' ),
            'edit_item'     => __( 'Edit Era', 'my-theme' ),
            'all_items'     => __( 'All Eras', 'my-theme' ),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array( 'title', 'editor', 'page-attributes' ),
        'menu_icon'    => 'dashicons-clock',
        'rewrite'      => false,
    ) );

    register_post_type( 'rj_quote', array(
        'labels'       => array(
            'name'          => __( 'Quotes', 'my-theme' ),
            'singular_name' => __( 'Quote', 'my-theme' ),
            'add_new_item'  => __( 'Add New Quote', 'my-theme' ),
            'edit_item'     => __( 'Edit Quote', 'my-theme' ),
            'all_items'     => __( 'All Quotes', 'my-theme' ),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array( 'title', 'editor', 'page-attributes' ),
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => false,
    ) );
}
add_action( 'init', 'rj_register_post_types' );
