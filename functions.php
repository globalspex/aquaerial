<?php
/**
 * GlobalSpex Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GlobalSpex
 * @since 1.2
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_GLOBALSPEX_VERSION', '1.2' );

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function astra_post_title() { 
	  $post_types = array('page','post'); 
	 
	  // bail early if the current post type if not the one we want to customize. 
	  if ( ! in_array( get_post_type(), $post_types ) ) { return; } 
	 
	  // Disable title. 
	  add_filter( 'astra_the_title_enabled', '__return_false' ); 
}
add_action( 'wp', 'astra_post_title' );


function gx_login_logo() {?>
    <style type="text/css">
      #login h1 a, .login h1 a {
				background-image: url(<?php echo get_home_url();?>/wp-content/uploads/2023/12/Logo-Left-Transparent-Background-1024x301-2.png);
				height: 65px;
				width: 320px;
				background-size: 320px 94px;
				background-repeat: no-repeat;
				padding-bottom: 30px;
      }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'gx_login_logo' );

function gxcore_enqueue_styles() {
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue base.css
    wp_enqueue_style(
        'gxcore-base',
        get_stylesheet_directory_uri() . '/css/base.css',
        [],
        $theme_version
    );

    // Enqueue components.css
    wp_enqueue_style(
        'gxcore-components',
        get_stylesheet_directory_uri() . '/css/components.css',
        ['gxcore-base'], // Optional dependency
        $theme_version
    );
}
add_action('wp_enqueue_scripts', 'gxcore_enqueue_styles');


/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'globalspex-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_GLOBALSPEX_VERSION, 'all' );
}