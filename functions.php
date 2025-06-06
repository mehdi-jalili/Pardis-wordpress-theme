<?php
/**
 * pardis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pardis
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

/**
 * Theme Constants
 */
define( 'pardis_THEME_DIR', get_template_directory_uri() );

define( 'pardis_THEME_PATH', get_template_directory() );
define( 'pardis_THEME_ASSETS_DIR', get_template_directory_uri() . '/assets' );

/**
 * include functions
 */
$FilesArray = glob( pardis_THEME_PATH . '/functions/*.php');
foreach($FilesArray as $FileArray)
{
	include_once $FileArray;
}


//Custom color for pardis.
require get_template_directory() . '/inc/custom-color.php';

//Custom font size for pardis.
require get_template_directory() . '/inc/custom-fontsize.php';

//Custom template tags for pardis.
require get_template_directory() . '/inc/template-tags.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

//Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
