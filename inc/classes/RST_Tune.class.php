<?php

/**
 * Helpers and tuning functions for WP core and change defaults
 *
 * @package     WordPress
 * @subpackage  RED Starter Theme
 * @since       1.0.0
 * @author      Luke Kortunov
 */
class RST_Tune {

  public static function remove_emoji()
  {
    remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles',     'print_emoji_styles' );
    remove_action( 'admin_print_styles',  'print_emoji_styles' );
    remove_filter( 'the_content_feed',    'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss',    'wp_staticize_emoji' );
    remove_filter( 'wp_mail',             'wp_staticize_emoji_for_email' );

    function disable_wp_emojis_in_tinymce( $plugins ){
      return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
    }
    add_filter( 'tiny_mce_plugins', array( 'RST_Tune', 'disable_wp_emojis_in_tinymce' ) );
  }



  public static function remove_generator()
  {
    remove_action('wp_head', 'wp_generator');
  }



  private function disable_wp_emojis_in_tinymce( $plugins ){
    return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
  }

}