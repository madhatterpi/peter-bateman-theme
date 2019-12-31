<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

/**
 * Register Custom Post Types
 */

function create_posttype() {

    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name'          => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),
                'menu_name'     => __( 'Portfolio' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'menu_icon'           => 'dashicons-format-image',
            'rewrite'           => array('slug' => 'portfolio'),
            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
        )
    );
}

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
function aw_custom_add_image_sizes() {
    add_image_size( 'small', 999, 300 ); // 300px high unlimited width
    add_image_size( 'medium-small', 450, 9999 ); // 300px wide unlimited height
    add_image_size( 'xl', 1200, 9999 ); // 1200px wide unlimited height
    add_image_size( 'xxl', 2000, 9999 ); // 2000px wide unlimited height
    add_image_size( 'xxxl', 3000, 9999 ); // 3000px wide unlimited height
    add_image_size( 'portfolio_full', 9999, 900 ); // 900px tall unlimited width

}

add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'small' => __( 'Small' ),
    'medium-small' => __( 'Medium Small' ),
    'xl' => __( 'Extra Large' ),
    'xxl' => __( '2x Extra Large' ),
    'xxxl' => __( '3x Extra Large' ),
    'portfolio_full' => __( 'Portfolio Full Size' ),
  ) );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Custom image sizes
add_image_size( 'portfolio', 9999, 475 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_image_size( 'portfolio-crop', 582, 475, true );
add_image_size( 'blog', 364, 9999 );
add_image_size( 'blog-crop', 454, 340, true );

// Load contact form 7 files
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'load_wpcf7_scripts');
function load_wpcf7_scripts() {
    if ( is_page('contact') ) {
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}

//Disable admin bar
show_admin_bar( false );
