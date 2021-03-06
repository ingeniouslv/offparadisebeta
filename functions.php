<?php
/**
 * _s functions and definitions
 *
 * @package _s
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	// Custom fields for Post Formats
	include_once( 'admin/acf/acf.php' );
	include_once( 'admin/acf/acf-fields.php' );	

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_s' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	/*
	 * Enable support for Post Thumbnails
	 * See http://codex.wordpress.org/Post_Thumbnails
	 */
	 add_theme_support( 'post-thumbnails' ); 

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'video', 'gallery', 'image', 'audio'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );


/**
 * Adds Custom User Meta data to user profiles
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function seven_contact_methods( $contactmethods ) {
	// remove what we don't want
    unset( $contactmethods[ 'aim' ] );
    unset( $contactmethods[ 'yim' ] );
    unset( $contactmethods[ 'jabber' ] );
    
    // add something useful
    $contactmethods[ 'position' ] = 'Position';
    $contactmethods[ 'twitter' ] = 'Twitter Username';
    $contactmethods[ 'instagram' ] = 'Instagram Username';
    $contactmethods[ 'facebook' ] = 'Facebook Profile URL';
    $contactmethods[ 'linkedin' ] = 'LinkedIn Public Profile URL';
    $contactmethods[ 'googleplus' ] = 'Google+ Profile URL';
    
    return $contactmethods;
}


/**
 * Returns the user avatar's url instead of img tag
 *
 */
add_filter( 'user_contactmethods', 'seven_contact_methods' ); 

function get_avatar_url($get_avatar){
    preg_match("/src='(.*?)'/i", $get_avatar, $matches);
    return $matches[1];
}


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function op_scripts() {
	wp_enqueue_style( 'op-bootstrapcss', get_template_directory_uri() . '/inc/css/bootstrap.css' );
	wp_enqueue_style( 'op-normalize', get_template_directory_uri() . '/inc/css/normalize.css' );
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'op-mediacss', 'http://fonts.googleapis.com/css?family=PT+Serif:400,400italic|Old+Standard+TT:700,400' );
	wp_enqueue_style( 'op-maincss', get_template_directory_uri() . '/inc/css/main.css' );
	wp_enqueue_style( 'op-mediacss', get_template_directory_uri() . '/inc/css/media.css' );

	wp_enqueue_script( 'op-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '20110115', true );
	wp_enqueue_script( 'op-pluginsjs', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '20120206', true );
/* 	wp_enqueue_script( 'op-bootstrapjs', get_template_directory_uri() . '/js/vendor/bootstrap.js', array( 'jquery' ), '20120207', true ); */
	wp_enqueue_script( 'op-mainjs', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20120207', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'op_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a href="'. get_permalink($post->ID) . '" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a>';
}

/*
 * This is a modified the_author_posts_link() which just returns the link.
 *
 * This is necessary to allow usage of the usual l10n process with printf().
 */
function op_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}
