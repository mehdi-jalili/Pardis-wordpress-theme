<?php

function pardis_setup() {

	load_theme_textdomain( 'pardis', pardis_THEME_PATH . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'pardis' ),
		)
	);
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );

	// register editor style

	function pardis_block_style() {
		register_block_style(            
			'core/button',            
			 array(                
			   'name'  => 'arrow-cta',                
			   'label' => 'Arrow Link'            
			)        
		  );
		}
	  
	  add_action( 'enqueue_block_editor_assets', 'pardis_block_style' );
	
	//register editor style end

	// Registers editor stylesheet

    function pardis_add_editor_styles() {
        $font_url = str_replace( ',', '%2C', '/*fonts.googleapis.com/css?family=Lato:300,400,700*/' );
        add_editor_style( $font_url );
    }
    add_action( 'after_setup_theme', 'pardis_add_editor_styles' );

	//register editor stylesheet end

	add_theme_support( 'responsive-embeds' );
	add_theme_support('custom-spacing');
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'pardis_setup' );