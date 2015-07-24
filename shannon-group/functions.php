<?php
/**
 * shannon group functions and definitions
 *
 * @package shannon group
 */

if(!isset($content_width)){
    $content_width = 960; /* pixel */
}

if ( ! function_exists( 'shannon_group_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shannon_group_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shannon group, use a find and replace
	 * to change 'shannon-group' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'shannon-group', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'shannon-group' ),
            'second' => esc_html__( 'Second Menu', 'shannon-group' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
//		'image',
//		'video',
//		'quote',
//		'link',
	) );

//	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'shannon_group_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // shannon_group_setup
add_action( 'after_setup_theme', 'shannon_group_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shannon_group_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shannon_group_content_width', 640 );
}
add_action( 'after_setup_theme', 'shannon_group_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function shannon_group_widgets_init() {
	register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'shannon-group' ),
            'id'            => 'sidebar-1',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'shannon_group_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shannon_group_scripts() {
	wp_enqueue_style( 'shannon-group-style', get_stylesheet_uri() );
        
        wp_enqueue_style('my-simone-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
               
        wp_enqueue_script( 'shannon-group-menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array('jquery'), '20150719', true );
        
        wp_enqueue_script( 'shannon-group-form-button', get_template_directory_uri() . '/js/form_button_hover.js', array('jquery'), '20150719', true );
        
        wp_enqueue_script( 'shannon-group-slider-button', get_template_directory_uri() . '/js/slider_button.js', array('jquery'), '20150719', true );
        
	wp_enqueue_script( 'shannon-group-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'shannon-group-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shannon_group_scripts' );

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

// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
    function wpex_pagination() {

        $prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
        $next_arrow = is_rtl() ? '&larr;' : '&rarr;';

        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 9999999; // need an unlikely integer
        if( $total > 1 )  {
            if (!$current_page = get_query_var('paged')) {
                $current_page = 1;
            }
            if( get_option('permalink_structure') ) {
                 $format = 'page/%#%/';
            } else {
                 $format = '&paged=%#%';
            }
            echo paginate_links(array(
                'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'		=> $format,
                'current'		=> max( 1, get_query_var('paged') ),
                'total' 		=> $total,
                'mid_size'		=> 2,
                'type' 			=> 'list',
                'prev_text'		=> $prev_arrow,
                'next_text'		=> $next_arrow,
            ) );
        }
    }
	
}