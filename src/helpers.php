<?php

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
function svg($filename, $return = false, $content = true, $dir = 'assets/dist/svg')
{
    $dir = mb_substr($dir, 0, 1) == '/' ? mb_substr($dir, 1, mb_strlen($dir)) : $dir;
    $dir = mb_substr($dir, -1, 1) == '/' ? mb_substr($dir, 0, mb_strlen($dir) - 1) : $dir;
    $path = get_template_directory() . '/' . $dir . '/' . $filename . '.svg';
    if ($return == false) {
        @require $path;
    } else {
        if ($content = true) {
            return file_get_contents($path);
        } else {
            return $path;
        }
    }
}


add_filter('upload_mimes', 'allowUploadSVG');
define( 'ALLOW_UNFILTERED_UPLOADS', true );
add_filter('generate_rewrite_rules', 'taxonomySlugAsPostType');

/**
 * Allow SVG files upload
 * @param $types
 * @return mixed
 */
function allowUploadSVG($types)
{
    $types['svg'] = 'image/svg+xml';
    return $types;
}


/**
 * Fix custom taxonomy terms for custom post types
 * After filter taxonomy slug in url will be replaced with post type url
 * @author http://someweblog.com/wordpress-custom-taxonomy-with-same-slug-as-custom-post-type/
 * @param $wp_rewrite
 */
function taxonomySlugAsPostType($wp_rewrite)
{
    $rules = [];

    $taxonomies = get_taxonomies(['_builtin' => false], 'objects');
    $post_types = get_post_types(['public' => true, '_builtin' => false], 'names');

    foreach ($post_types as $post_type) {

        foreach ($taxonomies as $taxonomy) {

            if ($taxonomy->object_type[0] != $post_type) {
                continue;
            }

            $categories = get_categories([
                'type' => $post_type,
                'taxonomy' => $taxonomy->name,
                'hide_empty' => 0
            ]);

            foreach ($categories as $category) {
                $rules[$post_type . '/' . $category->slug . '/?$'] = 'index.php?' . $category->taxonomy . '=' . $category->slug;
            }

        }

    }

    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_action( 'after_switch_theme', 'activate_my_theme' );
function activate_my_theme() {
    $template_directory= get_template_directory();
    $dir_parts_blocks    = $template_directory.'/acf-blocks/';
    $dir_parts_src    = $template_directory.'/assets/src/';
    $folders = scandir($dir_parts_blocks);
    $text_scss = "@import 'app';\r\n";
    $text_js = "import import_js from './app.js';\r\nimport '../scss/styles.scss';\r\n";
    foreach($folders as $folder){
        if($folder=='..'||$folder=='.'||$folder=='_import.scss'||$folder=='import.js'){
            continue;
        }
        $text_scss.="@import './../../../acf-blocks/".$folder."/scss/app';\r\n";
        $text_js.="import ".preg_replace('/[^ a-zа-яё\d]/ui', '',$folder )."_block from '../../../acf-blocks/".$folder."/js/app.js';\r\n";
    };
//    file_put_contents($dir_parts_blocks.'_import.scss', $text_scss);
//    file_put_contents($dir_parts_blocks.'import.js', $text_js);
    file_put_contents($dir_parts_src.'scss/styles.scss', $text_scss);
    file_put_contents($dir_parts_src.'js/script.js', $text_js);
}

/**
 * Verify for the presence of real content in the standard WordPress editor
 *
 * @param $content
 *
 * @return string
 */
function getContentWpEditor($content):string
{
    $pattern = ['<p>', '</p>', '&nbsp;', '<br>', '</br>', '<br />'];

    if ( trim(str_replace($pattern, '', $content)) ) {
        return $content;
    } else {
        return '';
    }
}
