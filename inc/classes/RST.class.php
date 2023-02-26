<?php

/**
 * Core class of RED Starter Theme
 *
 * @package     WordPress
 * @subpackage  RED Starter Theme
 * @since       1.0.0
 * @author      Luke Kortunov
 */
class RST {
    
    /**
     * It will crop string to specified length and add "..."
     *
     * @param $str  string  - source string, need to be cropped
     * @param $len  int     - number of chars, that you need, included "..."
     * @param $echo bool    - false==return | true == echo
     * @param $dots bool    - include "..." to output? default: yes (true)
     *
     * @return string/void - cropped stringn
     *
     * @since       1.0.0
     * @author      Luke Kortunov
     */
    public static function crop_text( $str, $len, $echo = false, $dots = true ) {
        if ( mb_strlen( $str ) > $len ) {
            if ( $dots == true ) {
                $res = mb_substr( $str, 0, ( $len - 3 ) );
                $res = $res . "...";
            } else {
                $res = mb_substr( $str, 0, $len );
            }
        } else {
            $res = $str;
        }
        
        if ( $echo == true ) {
            echo $res;
            
            return false;
        }
        
        return $res;
    }
    
    
    /**
     * Function, that require svg-file and return or print it
     *
     * @param string $filename - file name excluding file extension
     * @param bool $return - true == include file || false == return path
     * @param string $dir - if svg files directory not eq. "svg" - set target directory related to theme root
     *
     * @return string/void
     *
     * @since       1.0.0
     * @author      Luke Kortunov
     */
    public static function svg( $filename, $return = false, $content = true, $dir = 'assets/build/svg' ) {
        $dir  = mb_substr( $dir, 0, 1 ) == '/' ? mb_substr( $dir, 1, mb_strlen( $dir ) ) : $dir;
        $dir  = mb_substr( $dir, - 1, 1 ) == '/' ? mb_substr( $dir, 0, mb_strlen( $dir ) - 1 ) : $dir;
        $path = get_template_directory() . '/' . $dir . '/' . $filename . '.svg';
        if ( $return == false ) {
            @require $path;
        } else {
            if ( $content = true ) {
                return file_get_contents( $path );
            } else {
                return $path;
            }
        }
    }
    
    
    /**
     * Check, is string a valid JSON
     *
     * @param $string
     *
     * @return bool
     *
     * @since       1.1.0
     * @author      Luke Kortunov
     */
    public static function is_json( $string ) {
        json_decode( $string );
        
        return ( json_last_error() == JSON_ERROR_NONE );
    }
    
    
    /**
     * Lang selector
     *
     * Print markup of language selector.
     * It get qTranslate X Languages and prepare markup
     *
     * @param object $post
     * @param string $wrapper
     * @param string $wrapper_class
     * @param string $item_wrap
     *
     * @since       1.1.0
     * @since       1.2.0 - Update selector output, fix issues
     * @author      Luke Kortunov
     */
    public static function lang_selector( $post, $wrapper = 'ul', $wrapper_class = null, $item_wrap = 'li' ) {
        
        # Check, is qTranslate-X installed:
        if ( ! function_exists( 'qtranxf_getLanguage' ) ) {
            wp_die( __( 'You need install and activate qTranslate X plugin first', 'rst' ) );
        }
        
        # Prepare wrapper for all elements
        $wrapper_before = $wrapper != '' ? '<' . $wrapper . ' class="' . $wrapper_class . '">' : '';
        $wrapper_after  = $wrapper != '' ? '</' . $wrapper . '>' : '';
        
        # Prepare wrapper for each item
        $item_before = $item_wrap != '' ? '<' . $item_wrap . '>' : '';
        $item_after  = $item_wrap != '' ? '</' . $item_wrap . '>' : '';
        
        # Get current language code
        $lang_current = qtranxf_getLanguage();
        
        # Fill array with lang_code => lang_name
        $lang_all = array();
        foreach ( qtranxf_getSortedLanguages() as $lang_code ) {
            $lang_all[ $lang_code ] = qtranxf_getLanguageName( $lang_code );
        }
        
        # Get post URL without lang prefix
        if ( is_home() ) {
            $permalink = '';
        } else {
            $permalink = get_the_permalink( $post );
            $permalink = parse_url( $permalink );
            $permalink = $permalink['path'];
            $prefix    = mb_substr( $permalink, 1, 2 );
            if ( in_array( $prefix, qtranxf_getSortedLanguages() ) ) {
                $permalink = mb_substr( $permalink, 3 );
            }
        }
        
        # Prepare output:
        $out = $wrapper_before;
        
        # First print current language link:
        $key = array_search( $lang_all[ $lang_current ], $lang_all );
        $out .= $item_before . '<span>' . $key . '</span>';
        
        # Remove from all langs array active:
        unset( $lang_all[ $lang_current ] );
        
        # Add other langs to selector:
        foreach ( $lang_all as $lang_code => $lang_name ) {
            $out .= $item_before . '<a href="/' . $lang_code . $permalink . '">' . $lang_code . '</a>' . $item_after;
        }
        
        $out .= $wrapper_after;
        
        echo $out;
        
    }
    
    
    /**
     * Check locale, is it RTL locale
     *
     * @since       1.1.0
     * @author      Luke Kortunov
     */
    public static function is_rtl() {
        
        $rtl_locales = [ 'ar', 'ckb', 'fa_IR', 'he_IL', 'ug_CN', 'dv', 'fa_AF', 'ha', 'ps', 'uz_UZ', 'yi' ];
        
        $current_locale = get_locale();
        
        return in_array( $current_locale, $rtl_locales ) ? true : false;
        
    }
    
    
    /**
     * Get slug by $post of $post_id
     *
     * @param       $post mixed - post id or instance of WP_Post
     * @param       $echo bool
     *
     * @return      string
     *
     * @since       2.0.0
     * @author      Luke Kortunov
     */
    public static function get_slug( $post = false, $echo = false ) {
        
        if( $post === false ){
            global $post;
        }
        
        $slug = basename( get_permalink( $post ) );
        
        do_action( 'before_slug' );
        
        $slug = apply_filters( 'slug_filter', $slug );
        
        if ( $echo ) {
            echo $slug;
        }
        
        do_action( 'after_slug', $slug );
        
        return $slug;
        
    }
    
    
    /**
     * Check is post exists by ID
     *
     * @param       $post_id    int
     *
     * @return      bool
     *
     * @since       2.0.0
     * @author      Luke Kortunov
     */
    public static function is_post_exists( $post_id ) {
        
        global $wpdb;
    
        $count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $wpdb->posts WHERE ID = %d", $post_id ) );
    
        if($count == 1){
            return true;
        } else {
            return false;
        }
        
    }
    
}
