<?php

/**
 *
 * @global int $content_width
 */
function pardis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pardis_content_width', 640 );
}
add_action( 'after_setup_theme', 'pardis_content_width', 0 );