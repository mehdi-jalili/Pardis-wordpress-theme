<?php
/**
 * Enqueue scripts and styles.
 */
function pardis_scripts() {
	
	/**
	 * Theme Styles
	 */
	wp_enqueue_style( 'pardis-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'pardis-theme-bt-style', pardis_THEME_DIR . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	if (is_rtl()) {
		wp_enqueue_style('rtl-style', get_template_directory_uri() . '/style-rtl.css', array('pardis-style'), _S_VERSION);
		wp_style_add_data('pardis-style', 'rtl', 'replace');
	}

	/**
	 * Theme Scripts
	 */
	wp_enqueue_script( 'pardis-bt', pardis_THEME_DIR . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pardis-popper', pardis_THEME_DIR . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pardis-custom', pardis_THEME_DIR . '/assets/js/custom-scripts.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pardis_scripts' );