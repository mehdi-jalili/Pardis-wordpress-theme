<?php

function pardis_custom_background() {
			
    $defaults = array(
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => 'repeat',
        'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'           => 'auto',
        'default-attachment'     => 'scroll',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );
}

add_action( 'init', 'pardis_custom_background' );