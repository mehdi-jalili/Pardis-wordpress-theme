<?php

function pardis_customize_register( $wp_customize ) {

    // header color
    $wp_customize->add_setting( 'header_background_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color_control', array(
        'label'    => __( 'Header Background Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'header_background_color_setting',
    ) ) );


    // post border box color
    $wp_customize->add_setting( 'post_border_box_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_border_box_color_control', array(
        'label'    => __( 'Post Border Box Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'post_border_box_color_setting',
    ) ) );


    // button background color
    $wp_customize->add_setting( 'button_background_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color_control', array(
        'label'    => __( 'Button Background Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'button_background_color_setting',
    ) ) );


    // button text color
    $wp_customize->add_setting( 'button_text_color_setting', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color_control', array(
        'label'    => __( 'Button Text Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'button_text_color_setting',
    ) ) );



    // links color
    $wp_customize->add_setting( 'links_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'links_color_control', array(
        'label'    => __( 'Links Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'links_color_setting',
    ) ) );



    // heading text color
    $wp_customize->add_setting( 'heading_text_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_text_color_control', array(
        'label'    => __( 'Heading Text Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'heading_text_color_setting',
    ) ) );



    // text color
    $wp_customize->add_setting( 'text_color_setting', array(
        'default'           => '#2d2d2d',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color_control', array(
        'label'    => __( 'Text Color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'text_color_setting',
    ) ) );



    // footer color
    $wp_customize->add_setting( 'footer_color_setting', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color_control', array(
        'label'    => __( 'footer color', 'pardis' ),
        'section'  => 'colors',
        'settings' => 'footer_color_setting',
    ) ) );

}
add_action( 'customize_register', 'pardis_customize_register' );


function enqueue_dynamic_styles() {
    $header_background_color = get_theme_mod('header_background_color_setting');
    $post_border_box_color = get_theme_mod('post_border_box_color_setting');
    $button_background_color = get_theme_mod('button_background_color_setting');
    $button_text_color = get_theme_mod('button_text_color_setting');
    $links_color = get_theme_mod('links_color_setting');
    $heading_text_color_setting = get_theme_mod('heading_text_color_setting');
    $text_color = get_theme_mod('text_color_setting');
    $footer_color = get_theme_mod('footer_color_setting');



    // Enqueue the main theme stylesheet
    wp_enqueue_style( 'pardis-color-stylesheet-handle', get_stylesheet_uri() );

    // Add the dynamic CSS to the main theme stylesheet
    $custom_css = "

    #masthead {
        background-color: $header_background_color !important;
    }

    button,
    .submit,
    #searchbtnhead{
        background-color: $button_background_color !important;
        border-color: $button_background_color !important;
        color: $button_text_color !important;
    }

    button:hover,
    .submit:hover,
    #searchbtnhead:hover{
        background-color: $button_text_color !important;
        border-color: $button_background_color !important;
        color: $button_background_color !important;
    }

    a{
        color: $links_color;
    }

    .index-post-txt{
        
        border-color: $post_border_box_color !important;
    }

    h1,h2,h3,h4,h5,h6{
        color: $heading_text_color_setting;
    }

    p, div, span{
        color: $text_color;
    }

        footer {
            background-color: $footer_color;
        }
    ";
    wp_add_inline_style( 'pardis-color-stylesheet-handle', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dynamic_styles' );



