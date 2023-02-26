<?php
use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

$product = new PostType('product');

$product->setLabels(
    [
        'name' => __('All Products', 'RST'),
        'singular_name' => __('Products', 'RST'),
        'menu_name' => __('Products', 'RST'),
        'name_admin_bar' => __('Products member', 'RST'),
        'parent_item' => NULL,
        'parent_item_colon' => NULL,
        'add_new' => __('Add Product', 'RST'),
        'add_new_item' => __('Add Product', 'RST'),
        'new_item' => __('New Product', 'RST'),
        'edit_item' => __('Edit Product', 'RST'),
        'view_item' => __('View Product', 'RST'),
        'all_items' => __('All Products', 'RST'),
        'search_items' => __('Search Product', 'RST'),
        'not_found' => __('No Product found', 'RST'),
        'not_found_in_trash' => __('No Product found in trash', 'RST'),
        'featured_image' => __('Photo Product', 'RST'),
        'set_featured_image' => __('Add Photo Product', 'RST'),
        'remove_featured_image' => __('Remove Photo Product', 'RST'),
        'use_featured_image' => __('Use Photo Product', 'RST'),
    ]
);

$product->setArgs(
    [
        'menu_icon' => 'dashicons-products',
        'public' => TRUE,
        'publicly_queryable' => TRUE, // cpt: enabled url in backend/front side
        'query_var' => TRUE, // cpt: using name of CPT in WP functions as a parameter
        'hierarchical' => TRUE,
        'has_archive' => TRUE,
        'rewrite' => TRUE, // cpt: human-readable url
        'supports' => ['title', 'thumbnail', 'revisions'],
        'show_in_nav_menus' => TRUE, // cpt: admin Appearance -> Menus
        'exclude_from_search' => TRUE,
    ]
);


// Taxonomy
$taxGroup = new Taxonomy('group', 'group');

$taxGroup->setLabels(
    [
        'name' => __('Groups', 'RST'),
        'menu_name' => __('Groups', 'RST'),
        'singular_name' => __('Group', 'RST'),
        'search_items' => __('Search Group', 'RST'),
        'all_items' => __('All Groups', 'RST'),
        'parent_item' => __('Parent Group', 'RST'),
        'parent_item_colon' => __('Parent Group:', 'RST'),
        'edit_item' => __('Edit Group', 'RST'),
        'update_item' => __('Update Group', 'RST'),
        'add_new_item' => __('Add New Group', 'RST'),
        'view_item' => __('View Group', 'RST'),
        'new_item_name' => __('New name Group', 'RST'),
        'not_found' => __('No Group found', 'RST'),
    ]
);

$taxGroup->setArgs( // the taxonomy panel appears in the sidebar of the
    [
        'public' => TRUE,
        'publicly_queryable' => TRUE, // taxonomy: use in front
        'query_var' => TRUE, // taxonomy: use in front
        'show_admin_column' => TRUE, // taxonomy: show column on the page-list of All CPT items
        'show_in_quick_edit' => TRUE, // taxonomy: show in the page-list of All CPT items
        'show_in_nav_menus' => TRUE, // taxonomy: show in admin Appearance -> Menus
        'show_tagcloud' => TRUE, // taxonomy: use in widgets
        'hierarchical' => TRUE, // taxonomy: TRUE - like a category; FALSE - like a tag
        'show_in_rest' => TRUE, // TRUE - visible taxonomy in sidebar Gutenberg editor, FALSE - only WYSIWYG
    ]
);

$taxGroup->uses($product);
