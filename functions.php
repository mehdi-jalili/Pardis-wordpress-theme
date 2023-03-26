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
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme Constants
 */
define( 'pardis_THEME_DIR', get_template_directory_uri() );
define( 'pardis_THEME_ASSETS_DIR', get_template_directory_uri() . '/assets' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pardis_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pardis, use a find and replace
		* to change 'pardis' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pardis', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'pardis' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Enabling theme support for align full and align wide option for the block editor
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

    // Post Formats
        function add_post_formats_support() {
            add_theme_support( 'post-formats', array(
                'aside',
                'gallery',
                'link',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat'
            ) );
        }
    // Post Formats end

    // Front Page Posting
        function add_front_page_posting_support() {
            add_action( 'wp_loaded', 'my_custom_front_page_handling' );
        }
        
        function my_custom_front_page_handling() {
            if ( is_admin() && isset( $_POST['action'] ) && $_POST['action'] == 'update' ) {
                // Get the front page ID
                $front_page_id = get_option( 'page_on_front' );
        
                // Check if the front page has a post assigned to it
                $front_page_post = get_posts( array(
                    'post_type' => 'post',
                    'meta_key'  => '_wp_page_template',
                    'meta_value'=> 'front-page.php',
                    'numberposts' => -1,
                    'post_status' => 'publish'
                ) );
        
                // If no front page post exists, create one and assign it to the front page
                if ( ! $front_page_post ) {
                    $post_data = array(
                        'post_type'     => 'post',
                        'post_title'    => 'Front Page Post',
                        'post_status'   => 'publish',
                        'post_content'  => '',
                        'post_author'   => 1
                    );
                    $post_id = wp_insert_post( $post_data );
        
                    update_post_meta( $post_id, '_wp_page_template', 'front-page.php' );
        
                    // Assign the post to the front page
                    update_option( 'page_on_front', $post_id );
                    update_option( 'show_on_front', 'posts' );
                }
            }
        }

    // Front Page Posting end


}
add_action( 'after_setup_theme', 'pardis_setup' );

// Customize background

	function pardis_theme_support_custom_background() {
			
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

	add_action( 'init', 'pardis_theme_support_custom_background' );

//end custom background


//register custom logo
	/**
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

//register custom logo end

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pardis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pardis_content_width', 640 );
}
add_action( 'after_setup_theme', 'pardis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pardis_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pardis' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pardis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'pardis' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'pardis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'pardis' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'pardis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'pardis' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'pardis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pardis_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pardis_scripts() {
	
	/**
	 * Theme Styles
	 */
	wp_enqueue_style( 'pardis-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pardis-style', 'rtl', 'replace' );
	wp_enqueue_style( 'pardis-theme-bt-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pardis-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), _S_VERSION );
	wp_enqueue_style( 'pardis-theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );

	/**
	 * Theme Scripts
	 */
	wp_enqueue_script( 'pardis-bt', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pardis-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pardis-custom', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pardis_scripts' );

// register block pattern

	function pardis_wpdocs_register_block_patterns() {
		register_block_pattern(
			'wpdocs/my-example',
			array(
				'title'         => 'My First Block Pattern',
				'description'   => __('Block pattern description : This is my first block pattern','pardis'),
				'content'       => '<p><?php _e("A single paragraph block style","pardis");?> </p>',
				'categories'    => array( 'text' ),
				'keywords'      => array( 'cta', 'demo', 'example' ),
				'viewportWidth' => 800,
			)
		);
	}
	add_action( 'init', 'pardis_wpdocs_register_block_patterns' );

// register block pattern end

/**
 * Implement the Custom Header feature.
 */
//register custom header

	function pardis_theme_support_custom_header() {
			
		$defaults = array(
			'default-image'          => '',
			'random-default'         => false,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'default-text-color'     => 'ffffff',
			'header-text'            => true,
			'uploads'                => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
			'video'                  => false,
			'video-active-callback'  => 'is_front_page',
		);
		add_theme_support( 'custom-header', $defaults );

	}
	add_action( 'init', 'pardis_theme_support_custom_header' );

//register cusstom header end

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

