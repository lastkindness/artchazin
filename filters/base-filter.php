<?php
add_action('pre_get_posts', 'events_base_filter');

function events_base_filter($query) {

    if(!$query->is_post_type_archive('product')) {
        return;
    }

    if(isset($_GET['group'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [] ;
        $tax_query[] = [
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => explode(",", $_GET['group'])
        ];
        $query->set('tax_query', $tax_query);
    }
    if(isset($_GET['post_tag'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [] ;
        $tax_query[] = [
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => explode(",", $_GET['post_tag'])
        ];
        $query->set('tax_query', $tax_query);
    }
};
?>
