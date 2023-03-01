<?php
add_action('pre_get_posts', 'events_base_filter');

function events_base_filter($query)
{

/*    if (is_admin() || !$query->is_main_query()) {
        return;
    }*/

    if (!$query->is_post_type_archive('product')) {
        return;
    }

    if (isset($_GET['orderby'])) {
        $orderby = $_GET['orderby'];
        switch ($orderby) {
            case 'date-asc':
                $query->set('orderby', ['date' => 'ASC']);
                break;
            case 'date-desc':
                $query->set('orderby', ['date' => 'DESC']);
                break;
            case 'price-low':
                $meta_query = $query->get('meta_query');
                $meta_query = is_array($meta_query) ? $meta_query : [];
                $meta_query['price'] = [

                    [
                        'key' => 'price',
                        'type' => 'numeric'
                    ]
                ];
                $query->set('meta_query', $meta_query);
                $query->set('orderby', ['meta_value_num' => 'ASC']);
                break;
            case 'price-high':
                $meta_query = $query->get('meta_query');
                $meta_query = is_array($meta_query) ? $meta_query : [];
                $meta_query['price'] = [

                    [
                        'key' => 'price',
                        'type' => 'numeric'
                    ]
                ];
                $query->set('meta_query', $meta_query);
                $query->set('orderby', ['meta_value_num' => 'DESC']);
                break;
            case 'last_30':
                $date_query = $query->get('date_query');
                $date_query = is_array($date_query) ? $date_query : [];

                $date_query = [
                    [
                        'column' => 'post_date_gmt',
                        'after' => '30 days ago',
                    ]

                ];
                $query->set('date_query', $date_query);

                break;
            case 'title':

                $query->set('orderby', ['title' => 'ASC']);
                break;
        }
    }

    if (isset($_GET['group'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [];
        $tax_query[] = [
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => explode(',', $_GET['group'])
        ];

        $query->set('tax_query', $tax_query);
        // var_dump($query->tax_query->queried_terms);
    }

    if (isset($_GET['post_tag'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [];
        $tax_query[] = [
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => explode(',', $_GET['post_tag'])
        ];

        $query->set('tax_query', $tax_query);
        // var_dump($query->tax_query->queried_terms);
    }
    //Локация
    if (isset($_GET['location_event'])) {
        $meta_query = $query->get('meta_query');
        $meta_query = is_array($meta_query) ? $meta_query : [];
        $multiple_metas = count(explode(',', $_GET['location_event'])) > 1;
        if ($multiple_metas) {
            $meta_query = array_merge($meta_query, ['relation' => 'OR']);
            foreach (explode(',', $_GET['location_event']) as $location) {
                $meta_query[] = [

                    'key' => 'location_event',
                    'value' => $location,
                    'compare' => '='

                ];
            }
        } else {
            $meta_query[] = [

                'key' => 'location_event',
                'value' => wp_unslash(wc_clean($_GET['location_event'])),
                'compare' => '='

            ];
        }

        $query->set('meta_query', $meta_query);
    }

    //День
    if (isset($_GET['date_event'])) {

        $meta_query = $query->get('meta_query');
        $meta_query = is_array($meta_query) ? $meta_query : [];
        $meta_query['date_event'] = [
            [
                'key' => 'date_event',
                'value' => DateTime::createFromFormat('m-d', wp_unslash($_GET['date_event']))->format('Ymd'),
                'compare' => '='
            ]
        ];
        $meta_query = $query->set('meta_query', $meta_query);
    }

    // Безумие
    if (isset($_GET['price'])) {

        $meta_query = $query->get('meta_query');
        $meta_query = is_array($meta_query) ? $meta_query : [];
        $meta_query[] = [

            'key' => 'price',
            'value' => explode('-', $_GET['price']),
            'compare' => 'BETWEEN',
            'type' => 'numeric'

        ];
        $meta_query = $query->set('meta_query', $meta_query);
    }

    if (isset($_GET['gmap_event_location_lat']) && isset($_GET['gmap_event_location_lng'])) {
        $meta_query = $query->get('meta_query');
        $meta_query = is_array($meta_query) ? $meta_query : [];

        $meta_query = array_merge($meta_query, ['relation' => 'OR']);

        $meta_query[] = [

            'key' => 'gmap_event_location_lat',
            'value' => $_GET['gmap_event_location_lat'],

        ];

        $meta_query[] = [

            'key' => 'gmap_event_location_lng',
            'value' => $_GET['gmap_event_location_lng'],

        ];

        $query->set('meta_query', $meta_query);
    }
}

add_action('restrict_manage_posts', 'events_restrict_manage_posts');

function events_restrict_manage_posts($post_type)
{
    if ($post_type === 'product') {

        ?>
        <select name="events_category" id="">
            <option value=""><?php _e('Все категории', 'rst'); ?></option>
            <?php foreach (get_terms(['taxonomy' => 'group', 'hide_empty' => false]) as $cat) : ?>
                <option value="<?php echo $cat->slug; ?>" <?php selected($cat->slug, $_GET['group']); ?>><?php echo $cat->name; ?></option>
            <?php endforeach; ?>
        </select>

        <select name="events_tags" id="">
            <option value=""><?php _e('Все теги', 'rst'); ?></option>
            <?php foreach (get_terms(['taxonomy' => 'post_tag', 'hide_empty' => false]) as $cat) : ?>
                <option value="<?php echo $cat->slug; ?>" <?php selected($cat->slug, $_GET['post_tag']); ?>><?php echo $cat->name; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="events_location" id="">
            <option value=""><?php _e('Все локации', 'rst'); ?></option>
            <?php
            global $wpdb;
            $field = 'location_event';
            $all_locations = $wpdb->get_results($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s", $field), ARRAY_A);
            foreach ($all_locations as $location) : ?>
                <?php if ($location['meta_value'] === '') continue; ?>
                <option value="<?php echo $location['meta_value']; ?>" <?php selected($_GET['events_location'], $location['meta_value']); ?>><?php echo $location['meta_value']; ?></option>
            <?php endforeach; ?>
        </select>

        <?php
    }
}
add_filter('request', function ($query_vars) {
    if (!is_admin()) {
        return $query_vars;
    }
    if (isset($_GET['events_location']) && !empty($_GET['events_location'])) {
        $query_vars['meta_query'][] = [
            'key' => 'location_event',
            'value' => $_GET['events_location']
        ];
    }
    return $query_vars;
});

// if (isset($_GET['gmap_event_location_lat']) && isset($_GET['gmap_event_location_lng'])) {
//     $meta_query = $query->get('meta_query');
//     $meta_query = is_array($meta_query) ? $meta_query : [];
//     $meta_query = array_merge($meta_query, ['relation' => 'OR']);
//     $meta_query[] = [
//         'key' => 'gmap_event_location_lat',
//         'value' => $_GET['gmap_event_location_lat'],

//     ];
//     $meta_query[] = [
//         'key' => 'gmap_event_location_lng',
//         'value' => $_GET['gmap_event_location_lng'],

//     ];
//     $meta_query = $query->set('meta_query', $meta_query);
// }
