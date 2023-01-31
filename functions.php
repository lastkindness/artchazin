<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';

use RST\Theme;

$theme = Theme::getInstance();

/**
 * Example section
 */

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;
use RST\Rest\Resources\TestData;

$theme->rest->setNamespace('rst/v1');
$theme->rest->addResource(new TestData());

/**
 * Register custom gutenberg block with backend logic
 */

use RST\Blocks\PostSnapshot;

$theme->gutenberg->setDependencies(['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-data']);

try {

    $theme->gutenberg->register([
        'block'  => 'post-snapshot',
        'render' => [PostSnapshot::class, 'renderCallback'],
    ]);

} catch (Exception $e) {
    error_log($e->getMessage());
}

/**
 * Theme setup functions
 */

/**
 * Load scripts and styles
 * @link        http://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link        http://wp-kama.ru/function/wp_enqueue_script
 * @package     WordPress
 * @subpackage  RSV v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_load_assets()
{
    //--- Load scripts and styles only for frontend: -----------------------------
    if ( ! is_admin()) {
        // Styles
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/app.min.css');

        // Scripts
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false);
        wp_enqueue_script('jquery');
        wp_enqueue_script('text-lines', get_template_directory_uri() . '/assets/lib/text-lines.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/dist/app.min.js', [], '1.0.0', true);
    }

}

add_action('wp', 'rst_load_assets');

/**
 * Admin assets for Custom ACF Blocks
 */
add_action('admin_enqueue_scripts', 'load_assets_admin');
function load_assets_admin() {
    if (is_admin()) {
        // Styles
        wp_enqueue_style('admin-acf-blocks', get_template_directory_uri() . '/assets/dist/admin.min.css');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/admin.min.css');
    }
}

function basetheme_options_capability(){
    $role = get_role( 'administrator' );
    $role->add_cap( 'theme_options_view' );
}
add_action( 'admin_init', 'basetheme_options_capability' );

//theme options tab in appearance
if( function_exists( 'acf_add_options_sub_page' ) && current_user_can( 'theme_options_view' ) ) {
    acf_add_options_sub_page(
        array(
            'title'  => 'Theme Options',
            'parent' => 'themes.php',
        ) );
}

add_action('acf/init', 'relaunch_acf_init_blocks');
function relaunch_acf_init_blocks()
{
    if (function_exists('acf_register_block_type')) {

        if (file_exists(get_template_directory() . '/parts/acf-blocks/acf-registered-blocks.php')) {
            require_once 'parts/acf-blocks/acf-registered-blocks.php';
        }
    }
}

require_once 'src/helpers.php';
require_once 'src/Hooks/user-creating.php';

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg';
    return $mimes;
}

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
