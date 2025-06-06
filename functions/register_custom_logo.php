<?php

/*
* Add support for core custom logo.
*
* @link https://codex.wordpress.org/Theme_Logo
*/

function pardis_theme_prefix_setup() {
			
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'pardis_theme_prefix_setup' );