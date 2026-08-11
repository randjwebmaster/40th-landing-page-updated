<?php
/**
 * R&J 40th Anniversary theme functions.
 */

require_once get_template_directory() . '/inc/seed-content.php';

function rj_40th_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_editor_style( 'assets/css/custom.css' );
}
add_action( 'after_setup_theme', 'rj_40th_theme_setup' );

function rj_40th_register_pattern_categories() {
	register_block_pattern_category( 'rj-40th', array(
		'label' => __( 'R&J 40th Anniversary', 'rj-40th-blocks' ),
	) );
}
add_action( 'init', 'rj_40th_register_pattern_categories' );

function rj_40th_enqueue_assets() {
	wp_enqueue_style(
		'rj-40th-fonts',
		'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'rj-40th-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		array( 'rj-40th-fonts', 'wp-block-library' ),
		wp_get_theme()->get( 'Version' )
	);

	// Custom interactions only — the era-scroll rail and the tagline write-in.
	wp_enqueue_script(
		'rj-40th-tagline',
		get_template_directory_uri() . '/assets/js/tagline.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'rj-40th-era-scroll',
		get_template_directory_uri() . '/assets/js/era-scroll.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'rj_40th_enqueue_assets' );

function rj_40th_preconnect_fonts() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'rj_40th_preconnect_fonts', 1 );
