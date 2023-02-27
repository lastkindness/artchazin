<?php
add_action('pre_get_posts', 'events_base_filter');

function events_base_filter($query) {
    /*        if(is_admin() || !$query->is_main_query()) {
                return;
            }
            if(!$query->is_post_type_archive('group')) {
                return;
            }
    */
    if(isset($_GET['product_group'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [] ;
        $tax_query[] = [
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => explode(",", $_GET['product_group'])
        ];
        $query->set('tax_query', $tax_query);
        //var_dump($query->tax_query);
    }
};
?>
