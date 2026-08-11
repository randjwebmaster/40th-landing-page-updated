<?php
/**
 * On activation, create the Home page from the landing-page pattern
 * and set it as the site's static front page. Runs once — if a page
 * with the "home" slug already exists, it is left alone so edits
 * made in the block editor are never overwritten.
 */
function rj_40th_seed_front_page() {
	$existing = get_page_by_path( 'home' );
	if ( $existing ) {
		return;
	}

	ob_start();
	include get_template_directory() . '/patterns/landing-page.php';
	$content = ob_get_clean();

	$page_id = wp_insert_post( array(
		'post_type'    => 'page',
		'post_title'   => 'Home',
		'post_name'    => 'home',
		'post_status'  => 'publish',
		'post_content' => $content,
	) );

	if ( $page_id && ! is_wp_error( $page_id ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_id );
	}
}
add_action( 'after_switch_theme', 'rj_40th_seed_front_page' );
