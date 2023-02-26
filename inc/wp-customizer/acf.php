<?php
if( function_exists('acf_add_options_page') ) {

    // add parent
    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title' 	=> 'Theme Settings',
        'redirect' 		=> false
    ));


//    // add sub page
//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'AGB',
//        'menu_title' 	=> 'AGB',
//        'parent_slug' 	=> $parent['menu_slug'],
//    ));
//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'AGB',
//        'menu_title' 	=> 'AGB',
//        'parent_slug' 	=> $parent['menu_slug'],
//    ));

}