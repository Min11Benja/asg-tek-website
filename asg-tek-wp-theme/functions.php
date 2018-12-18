<?php
/**
 * asg-tek functions and definitions
 *
  ╔ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ╗
       \||/
       \||/     Tema: ASG-Tek_Por_Anana_Casa_Creativa              
     .<><><>.   Autor: Benjamin Martinez Jurez (www.min11benja.com)
    .<><><><>.  Fecha Creacion: 5 Noviembre 2018
    '<><><><>'  Contacto: contacto@anana.mx
    ''<><><>''   
      `''''´    
  ╚ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ╝
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package asg-tek
 */


/*Remove Version Control Number display for Security Purposes*/
function wpb_remove_version() {
return '';
}
add_filter('the_generator', 'wpb_remove_version');

/*Remove Welcome Panel*/
remove_action('welcome_panel', 'wp_welcome_panel');

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

/*_undersocore Functions*/

if ( ! function_exists( 'asg_tek_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function asg_tek_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on asg-tek, use a find and replace
		 * to change 'asg-tek' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'asg-tek', get_template_directory() . '/languages' );

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
		add_theme_support( 'custom-background', apply_filters( 'asg_tek_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'asg_tek_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function asg_tek_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'asg_tek_content_width', 640 );
}
add_action( 'after_setup_theme', 'asg_tek_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function asg_tek_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'asg-tek' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'asg-tek' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'asg_tek_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function asg_tek_scripts() {
	wp_enqueue_style( 'asg-tek-style', get_stylesheet_uri() );

	wp_enqueue_script( 'asg-tek-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'asg-tek-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'asg_tek_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*ASG Tek Custome Menus*/
// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'asg-tek' ),
        'sub-menu'=> __('Sub Menu','asg-tek'),
		'footer' => __( 'Footer Menu', 'asg-tek' )
	) );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


/*ASG TEK edite excerpt more btn*/
function new_excerpt_more($more){
    global $post;
    return '...';
    
}
add_filter('excerpt_more','new_excerpt_more');

/*Author Box for ASG Tek Blog*/
function wpb_author_info_box( $content ) {
 
global $post;
 
// Detect if it is a single post with a post author
if ( is_single() && isset( $post->post_author ) ) {
    
//detect Language and edit string accordingly  
if(pll_current_language() == 'en') {
                    $sAbout='About';
                    $sView='View all post by';
                    $sWeb='Website';
    
                } else if(pll_current_language() == 'es') {
                    $sAbout='Acerca de';
                    $sView='Ver todos los articulos por';
                    $sWeb='Sitio Web';
                }      
 
// Get author's display name 
$display_name = get_the_author_meta( 'display_name', $post->post_author );
 
// If display name is not available then use nickname as display name
if ( empty( $display_name ) )
$display_name = get_the_author_meta( 'nickname', $post->post_author );
 
// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );
 
// Get author's website URL 
$user_website = get_the_author_meta('url', $post->post_author);
 
// Get link to the author archive page
$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
  
if ( ! empty( $display_name ) )
 
$author_details = '<p class="author_name">'.$sAbout .' '. $display_name . '</p>';
 
if ( ! empty( $user_description ) )
// Author avatar and bio
 
$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';
 
$author_details .= '<p class="author_links"><a href="'. $user_posts .'">'. $sView .' '. $display_name . '</a>';  
 
// Check if author has a website in their profile
if ( ! empty( $user_website ) ) {
 
// Display author website link
$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">'. $sWeb .'</a></p>';
 
} else { 
// if there is no author website then just close the paragraph
$author_details .= '</p>';
}
 
// Pass all this info to post content  
$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
}
return $content;
}
 
// Add our function to the post content filter 
add_action( 'the_content', 'wpb_author_info_box' );
 
// Allow HTML in author bio section 
remove_filter('pre_user_description', 'wp_filter_kses');

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
