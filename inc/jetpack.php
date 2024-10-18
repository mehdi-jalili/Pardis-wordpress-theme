<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package pardis
 */

/**
 * Jetpack setup function.
 *
 */
function pardis_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'pardis_infinite_scroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => 'pardis-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'after_setup_theme', 'pardis_jetpack_setup' );

if ( ! function_exists( 'pardis_infinite_scroll_render' ) ) :
	/**
	 * Custom render function for Infinite Scroll.
	 */
	function pardis_infinite_scroll_render() {
		while ( have_posts() ) {
			the_post();
			if ( is_search() ) :
				get_template_part( 'template-parts/content/content', 'search' );
			else :
				get_template_part( 'template-parts/content/content', get_post_type() );
			endif;
		}
	}
endif;
