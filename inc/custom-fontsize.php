<?php



function pardis_custom_typography_register( $wp_customize ) {
    
    // Add typography section
    $wp_customize->add_section( 'pardis_typography_section', array(
        'title'    => __( 'Typography', 'pardis' ),
        'priority' => 30,
    ) );


    $font_weight_choices = array(
        '100'  => 100,
        '200'  => 200,
        '300'  => 300,
        '400 (Normal)'  => 400,
        '500'  => 500,
        '600'  => 600,
        '700 (Bold)'  => 700,
        '800'  => 800,
        '900 (Strong)'  => 900,
    );


    // H1 font-size setting
    $wp_customize->add_setting( 'pardis_h1_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H1 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h1_fontsize_control', array(
        'label'    => __( 'H1 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h1_fontsize_setting',
        'type'     => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 100,
            'step' => 1,
        ),
        'priority' => 10,
        'class' => 'pardis-h1-fontsize-control',
    ) ) );

    // H1 font-weight setting
    $wp_customize->add_setting( 'pardis_h1_fontweight_setting', array(
        'default'           => '600',
        'sanitize_callback' => 'absint',
    ) );

    // H1 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h1_fontweight_control', array(
        'label'    => __( 'H1 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h1_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );


    // H2 font-size setting
    $wp_customize->add_setting( 'pardis_h2_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H2 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h2_fontsize_control', array(
        'label'    => __( 'H2 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h2_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // H2 font-weight setting
    $wp_customize->add_setting( 'pardis_h2_fontweight_setting', array(
        'default'           => '600',
        'sanitize_callback' => 'absint',
    ) );

    // H2 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h2_fontweight_control', array(
        'label'    => __( 'H2 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h2_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );


    // H3 font-size setting
    $wp_customize->add_setting( 'pardis_h3_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H3 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h3_fontsize_control', array(
        'label'    => __( 'H3 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h3_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // H3 font-weight setting
    $wp_customize->add_setting( 'pardis_h3_fontweight_setting', array(
        'default'           => '600',
        'sanitize_callback' => 'absint',
    ) );

    // H3 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h3_fontweight_control', array(
        'label'    => __( 'H3 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h3_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );

    

    // H4 font-size setting
    $wp_customize->add_setting( 'pardis_h4_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H4 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h4_fontsize_control', array(
        'label'    => __( 'H4 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h1_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // H4 font-weight setting
    $wp_customize->add_setting( 'pardis_h4_fontweight_setting', array(
        'default'           => '500',
        'sanitize_callback' => 'absint',
    ) );

    // H4 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h4_fontweight_control', array(
        'label'    => __( 'H4 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h4_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );
    

    // H5 font-size setting
    $wp_customize->add_setting( 'pardis_h5_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H5 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h5_fontsize_control', array(
        'label'    => __( 'H5 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h5_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // H5 font-weight setting
    $wp_customize->add_setting( 'pardis_h5_fontweight_setting', array(
        'default'           => '500',
        'sanitize_callback' => 'absint',
    ) );

    // H5 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h5_fontweight_control', array(
        'label'    => __( 'H5 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h5_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );


    // H6 font-size setting
    $wp_customize->add_setting( 'pardis_h6_fontsize_setting', array(
        'default'           => '35',
        'sanitize_callback' => 'absint',
    ) );

    // H6 font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h6_fontsize_control', array(
        'label'    => __( 'H6 Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h6_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // H6 font-weight setting
    $wp_customize->add_setting( 'pardis_h6_fontweight_setting', array(
        'default'           => '500',
        'sanitize_callback' => 'absint',
    ) );

    // H6 font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_h6_fontweight_control', array(
        'label'    => __( 'H6 Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_h6_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );
    

    // P font-size setting
    $wp_customize->add_setting( 'pardis_p_fontsize_setting', array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
    ) );

    // p font-size control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_p_fontsize_control', array(
        'label'    => __( 'Paragraph Font Size (px)', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_p_fontsize_setting',
        'type'     => 'number',
    ) ) );



    // paragraph font-weight setting
    $wp_customize->add_setting( 'pardis_p_fontweight_setting', array(
        'default'           => '400',
        'sanitize_callback' => 'absint',
    ) );

    // paragraph font-weight control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pardis_p_fontweight_control', array(
        'label'    => __( 'Paragraph Font Weight', 'pardis' ),
        'section'  => 'pardis_typography_section',
        'settings' => 'pardis_p_fontweight_setting',
        'type'     => 'select',
        'choices'  => array_combine( $font_weight_choices, $font_weight_choices ),
    ) ) );

}
add_action( 'customize_register', 'pardis_custom_typography_register' );



 
function pardis_enqueue_dynamic_typography() {

    $h1_fontsize = get_theme_mod( 'pardis_h1_fontsize_setting') . 'px';
    $h1_fontweight = get_theme_mod( 'pardis_h1_fontweight_setting');

    $h2_fontsize = get_theme_mod( 'pardis_h2_fontsize_setting') . 'px';
    $h2_fontweight = get_theme_mod( 'pardis_h2_fontweight_setting');

    $h3_fontsize = get_theme_mod( 'pardis_h3_fontsize_setting') . 'px';
    $h3_fontweight = get_theme_mod( 'pardis_h3_fontweight_setting');

    $h4_fontsize = get_theme_mod( 'pardis_h4_fontsize_setting') . 'px';
    $h4_fontweight = get_theme_mod( 'pardis_h4_fontweight_setting');

    $h5_fontsize = get_theme_mod( 'pardis_h5_fontsize_setting') . 'px';
    $h5_fontweight = get_theme_mod( 'pardis_h5_fontweight_setting');

    $h6_fontsize = get_theme_mod( 'pardis_h6_fontsize_setting') . 'px';
    $h6_fontweight = get_theme_mod( 'pardis_h6_fontweight_setting');

    $p_fontsize = get_theme_mod( 'pardis_p_fontsize_setting') . 'px';
    $p_fontweight = get_theme_mod( 'pardis_p_fontweight_setting');


    // Enqueue the main theme stylesheet
    wp_enqueue_style( 'pardis-typography-stylesheet-handle', get_stylesheet_uri() );

    // Add the dynamic CSS to the main theme stylesheet
    $pardis_custom_typography = "


    h1{
        font-size: $h1_fontsize;
    }

    h1{
        font-weight: $h1_fontweight;
    }

    h2{
        font-size: $h2_fontsize;
    }

    h2{
        font-weight: $h2_fontweight;
    }

    h3{
        font-size: $h3_fontsize;
    }

    h3{
        font-weight: $h3_fontweight;
    }

    h4{
        font-size: $h4_fontsize;
    }

    h4{
        font-weight: $h4_fontweight;
    }

    h5{
        font-size: $h5_fontsize;
    }

    h5{
        font-weight: $h5_fontweight;
    }

    h6{
        font-size: $h6_fontsize;
    }

    h6{
        font-weight: $h6_fontweight;
    }

    p{
        font-size: $p_fontsize;
    }

    p{
        font-weight: $p_fontweight;
    }

    ";
    wp_add_inline_style( 'pardis-typography-stylesheet-handle', $pardis_custom_typography );
}
add_action( 'wp_enqueue_scripts', 'pardis_enqueue_dynamic_typography' );

