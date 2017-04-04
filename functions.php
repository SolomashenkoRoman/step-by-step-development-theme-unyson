<?php
/**
 * Step by step development theme unyson functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Step_by_step_development_theme_unyson
 */

if ( ! function_exists( 'step_by_step_development_theme_unyson_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

define("MY_THEME_TEXTDOMAIN", 'step-by-step-development-theme-unyson');
function step_by_step_development_theme_unyson_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Step by step development theme unyson, use a find and replace
	 * to change 'step-by-step-development-theme-unyson' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( MY_THEME_TEXTDOMAIN, get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'step-by-step-development-theme-unyson' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'step_by_step_development_theme_unyson_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'step_by_step_development_theme_unyson_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function step_by_step_development_theme_unyson_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'step_by_step_development_theme_unyson_content_width', 640 );
}
add_action( 'after_setup_theme', 'step_by_step_development_theme_unyson_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function step_by_step_development_theme_unyson_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'step-by-step-development-theme-unyson' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'step-by-step-development-theme-unyson' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'step_by_step_development_theme_unyson_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function step_by_step_development_theme_unyson_scripts() {
	wp_enqueue_style( 'step-by-step-development-theme-unyson-style', get_stylesheet_uri() );

	wp_enqueue_script( 'step-by-step-development-theme-unyson-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'step-by-step-development-theme-unyson-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'step_by_step_development_theme_unyson_scripts' );


function _action_theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active

    $option_value = fw_get_db_customizer_option('body-color');
    //$option_value = fw_get_db_settings_option('body-color');
    /*
     * global $post;

    if (!$post || $post->post_type != 'post') {
        return;
    }

    $option_value = fw_get_db_post_option($post->ID, 'body-color');

     */

    echo '<style type="text/css">'
        . 'body { '
        . 'border: 30px solid '. esc_html($option_value) .'; '
        . '}'
        . '</style>';
}

add_action('wp_print_styles', '_action_theme_wp_print_styles');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load TGM Plugin Activation.
 */
require get_template_directory() . '/tgm-plugin-activation/step-by-step-tgm-plugin-activation.php';

/**
 * Load hooks.
 */
require get_template_directory() . '/inc/hooks.php';

