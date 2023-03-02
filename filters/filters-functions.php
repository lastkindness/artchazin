
<?php
function get_events_range_slider($field = '', $class = '', $title = '', $desc = '')
{
    global $wp, $wpdb;
    $form_action = home_url($wp->request);
    $current_filters = isset($_GET[$field]) ? explode('-', wc_clean(wp_unslash($_GET[$field]))) : [];
    $fields = $wpdb->get_results($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s ", $field), ARRAY_A);

    $fields_for_slider = wp_list_pluck($fields, 'meta_value');
    ?>
    <div class="filters__price filters__item event_filter_block event_filter_<?php echo $field; ?>">
        <p class="filters__price-text"><?php _e($title, 'rst'); ?></p>
        <form action="<?php echo $form_action; ?>" method="GET" id="form-<?php echo $field; ?>">
            <?php
            $option_is_set = in_array(0, $current_filters);
            ?>
            <div id="form-group-<?php echo $field; ?>"
                 class="form-group form-group-<?php echo $field; ?>"
                 data-from="<?php echo count($current_filters) > 1 ? $current_filters[0] : min($fields_for_slider); ?>"
                 data-to="<?php echo count($current_filters) > 1 ? $current_filters[1] : max($fields_for_slider); ?>">
            </div>
            <div class="desc-group desc-group-<?php echo $field; ?>">
                <input type="hidden" id="min_madness">
                <input type="hidden" id="max_madness">
            </div>
            <input type="hidden" name="<?php echo esc_attr($field); ?>" id="hidden-<?php echo esc_attr($field); ?>" value="<?php echo esc_attr(implode('-',  $current_filters)); ?>">

            <?php echo wc_query_string_form_fields(null, [$field], '', true);
            ?>
        </form>
        <div class="filters__price-range">
            <span class="from">0</span>
            <span class="to">5000</span>
        </div>
    </div>
    <?php
}
function get_filter_by_taxonomy_links($taxonomy = '', $title = '', $class = '', $query_type = 'AND')
{
    global $wp_query, $wpdb;

    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false
    ]);

    $meta_query = isset($wp_query->query_vars['meta_query']) ? $wp_query->query_vars['meta_query'] : array();
    $tax_query = isset($wp_query->query_vars['tax_query']) ? $wp_query->query_vars['tax_query'] : array();

    foreach ($tax_query as $key => $query) {
        if (is_array($query) && $taxonomy === $query['taxonomy']) {
            unset($tax_query[$key]);
        }
    }

    $meta_query = new WP_Meta_Query($meta_query);
    $tax_query      = new WP_Tax_Query($tax_query);

    $meta_query_sql   = $meta_query->get_sql('post', $wpdb->posts, 'ID');
    $tax_query_sql  = $tax_query->get_sql($wpdb->posts, 'ID');

    $term_ids_sql = '(' . implode(',', array_map('absint', wp_list_pluck($terms, 'term_id'))) . ')';


    $sql = "SELECT COUNT( DISTINCT {$wpdb->posts}.ID ) AS term_count, terms.term_id AS term_count_id FROM {$wpdb->posts} INNER JOIN {$wpdb->term_relationships} AS term_relationships ON {$wpdb->posts}.ID = term_relationships.object_id
    INNER JOIN {$wpdb->term_taxonomy} AS term_taxonomy USING( term_taxonomy_id )
    INNER JOIN {$wpdb->terms} AS terms USING( term_id )
    " . $tax_query_sql['join'] . $meta_query_sql['join'] . "
    WHERE {$wpdb->posts}.post_type IN ( 'product' )
    AND {$wpdb->posts}.post_status = 'publish'
    {$tax_query_sql['where']} {$meta_query_sql['where']}
    AND terms.term_id IN $term_ids_sql
    GROUP BY terms.term_id
    ";
    $result = $wpdb->get_results($sql, ARRAY_A);
    $result = wp_list_pluck($result, 'term_count', 'term_count_id');

    $fn = '';
    if (strpos($taxonomy, 'group') !== false || strpos($taxonomy, 'post_tag') !== false) {
        $fn = "get_events_string_url";
    }
    // var_dump($fn());

    ?><div class="event_filter_block dropdown filters__item">
    <p class="filters__price-text dropdown__title"><?php _e($title, 'rst'); ?></p>
    <ul class="<?php echo $class; ?> filters__select dropdown__block">
        <?php foreach ($terms as $term) : ?>
            <?php
            $count = isset($result[$term->term_id]) ? $result[$term->term_id] : 0;
            $option_is_set = false;
            if ($count == 0) {
                continue;
            }
            if ($query_type === 'AND') {
                $link = remove_query_arg($taxonomy, $fn());
                $link_terms = isset($_GET[$taxonomy]) ? explode(',', $_GET[$taxonomy]) : [];
                // var_dump($link_terms);
                if (in_array($term->slug, $link_terms)) {
                    $option_is_set = true;
                    $key = array_search($term->slug, $link_terms);
                    unset($link_terms[$key]);
                    // var_dump($key);
                } else {
                    $link_terms[] = $term->slug;
                }
                if (!empty($link_terms)) {
                    $link = add_query_arg($taxonomy, implode(',', $link_terms), $link);
                }
            } else {
                $link = remove_query_arg($taxonomy, $fn());

                if ($term->slug === $_GET[$taxonomy]) {
                    $option_is_set = true;
                }
                $link = add_query_arg($taxonomy, $term->slug, $fn());
            }
            ?>
            <li class="<?php echo $option_is_set ? 'active' : ''; ?>"><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a><span> (<?php echo $count; ?>)</span></li>
        <?php endforeach; ?>
    </ul>
    </div>
    <?php
}

function get_filter_by_taxonomy_forms($taxonomy = 'group', $hide_empty = false, $title = '', $all_options = '') {
    global $wp;
    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => $hide_empty,

    ]);
    $form_action = home_url($wp->request);
    $current_filters = $_GET[$taxonomy] ? explode(',', wc_clean(wp_unslash($_GET[$taxonomy]))) : [];

    ?>
    <div class="filters__item event_filter_block event_filter_<?php echo $taxonomy; ?>">
        <p class="filters__price-text"><?php _e($title, 'rst'); ?></p>
        <form action="<?php echo $form_action; ?>" method="GET" id="form-<?php echo $taxonomy; ?>">

            <?php foreach ($terms as $term) : ?>
                <?php
                $option_is_set = in_array($term->slug, $current_filters)
                ?>
                <div class="form-group form-group-<?php echo $taxonomy; ?>">
                    <input type="checkbox" value="<?php echo urldecode($term->slug); ?>" id="<?php echo 'term-' . $term->term_id; ?>" <?php checked($option_is_set, true); ?>>
                    <label for="<?php echo 'term-' . $term->term_id; ?>"><?php echo $term->name; ?></label>
                </div>

            <?php endforeach; ?>
            <input type="hidden" name="<?php echo esc_attr($taxonomy); ?>" id="hidden-<?php echo esc_attr($taxonomy); ?>" value="<?php echo esc_attr(implode(',',  $current_filters)); ?>">

            <?php
            echo wc_query_string_form_fields(null, [$taxonomy], '', true);
            ?>

        </form>
    </div>
    <script>
        jQuery('#form-<?php echo esc_attr($taxonomy); ?>').on('change', function() {
            console.log('changed')
            let field = jQuery('#hidden-<?php echo  esc_attr($taxonomy); ?>')
            let val = '';
            jQuery('.form-group input:checked', jQuery(this)).each(function(i) {

                if (i === 0) {
                    val += jQuery(this).val();
                } else {
                    val += ',' + jQuery(this).val();
                }
                console.log(val)


            })
            if (val !== '') {
                field.val(val);
            } else {
                field.attr('disabled', true)
            }


            jQuery(this).submit();
        })
    </script>
    <?php
}

function get_filter_by_meta_field_links($field = '', $title = '', $class = '', $query_type = 'AND', $page = '')
{

    global $wp_query, $wpdb;

    $meta_query = isset($wp_query->query_vars['meta_query']) ? $wp_query->query_vars['meta_query'] : array();
    $tax_query = isset($wp_query->query_vars['tax_query']) ? $wp_query->query_vars['tax_query'] : array();

    foreach ($meta_query as $key => $query) {
        if (is_array($query) && $field === $query['key']) {
            unset($meta_query[$key]);
        }
    }

    $meta_query = new WP_Meta_Query($meta_query);
    $tax_query      = new WP_Tax_Query($tax_query);


    $meta_query_sql   = $meta_query->get_sql('post', $wpdb->posts, 'ID');
    $tax_query_sql  = $tax_query->get_sql($wpdb->posts, 'ID');



    $fields = $wpdb->get_results($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s", $field), ARRAY_A);

    $meta_key_location = implode(',', array_filter(array_map(function ($meta) {
        if ($meta['meta_value'] !== '') {
            return "'" . $meta['meta_value'] . "'";
        } else {
            return false;
        }
    }, $fields)));

    $sql = " SELECT COUNT(DISTINCT {$wpdb->posts}.ID) as {$field}_count, pm1.meta_value as {$field} FROM {$wpdb->posts} INNER JOIN {$wpdb->postmeta} as pm1  ON ({$wpdb->posts}.ID = pm1.post_id) " . $tax_query_sql['join'] . $meta_query_sql['join'] . " WHERE {$wpdb->posts}.post_type IN ('product')
    AND {$wpdb->posts}.post_status = 'publish' "  . $tax_query_sql['where'] . $meta_query_sql['where'] . " AND pm1.meta_value IN ({$meta_key_location}) GROUP BY {$field}";

    $result = $wpdb->get_results($sql, ARRAY_A);

    $result = wp_list_pluck($result, "{$field}_count", "{$field}");


    // var_dump($fields);
    if (!$page) {
        return new WP_Error('empty_arg', 'Не указан важный аргумент');
    }
    $fn = "get_{$page}_string_url";


    ?>
    <div class="event_filter_block">
        <h3><?php _e($title, 'rst'); ?></h3>
        <ul class="<?php echo $class; ?>">
            <?php foreach ($fields as $field_key => $field_name) : ?>
                <?php

                if (!$field_name['meta_value']) {
                    continue;
                }

                $count = isset($result[$field_name['meta_value']]) ? $result[$field_name['meta_value']] : 0;
                if ($count == 0) {
                    continue;
                }
                $option_is_set = false;
                if ($query_type === 'AND') {
                    $link = remove_query_arg($field, $fn());
                    $link_terms = isset($_GET[$field]) ? explode(',', $_GET[$field]) : [];
                    // var_dump($link_terms);
                    if (in_array($field_name['meta_value'], $link_terms)) {
                        $option_is_set = true;
                        $key = array_search($field_name['meta_value'], $link_terms);
                        unset($link_terms[$key]);
                        // var_dump($key);
                    } else {
                        $link_terms[] = $field_name['meta_value'];
                    }
                    if (!empty($link_terms)) {
                        $link = add_query_arg($field, implode(',', $link_terms), $link);
                    }
                } else {
                    $link = remove_query_arg($field, $fn());

                    if ($field_name['meta_value'] === $_GET[$field]) {
                        $option_is_set = true;
                    }
                    $link = add_query_arg($field, $field_name['meta_value'], $fn());
                }
                ?>
                <li><a href="<?php echo $link; ?>" class="<?php echo $option_is_set ? 'active' : ''; ?>"><?php echo  $field_name['meta_value']; ?></a><span> (<?php echo $count; ?>)</span></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}

function get_events_string_url()
{

    $link = get_post_type_archive_link('product');

    if (isset($_GET['group'])) {
        $link = add_query_arg('group', wp_unslash($_GET['group']), $link);
    }

    if (isset($_GET['post_tag'])) {
        $link = add_query_arg('post_tag', wp_unslash($_GET['post_tag']), $link);
    }

    if (isset($_GET['location_event'])) {
        $link = add_query_arg('location_event', wp_unslash($_GET['location_event']), $link);
    }
    return $link;
}
if (!function_exists('wc_clean')) {
    function wc_clean($var)
    {
        if (is_array($var)) {
            return array_map('wc_clean', $var);
        } else {
            return is_scalar($var) ? sanitize_text_field($var) : $var;
        }
    }
}

function events_get_orderby()
{
    $current_lang = pll_current_language('slug');

    if ($current_lang == 'he') {
        return [
            'date-asc' => __('לפי תאריך (מהקרוב)', 'rst'),
            'date-desc' => __('לפי תאריך (מהמשך)', 'rst'),
            'price-low' => __('לפי מחיר (מהנמוך ביותר)', 'rst'),
            'price-high' => __('לפי מחיר (מגבוה יותר)', 'rst'),
            'last_30' => __('30 הימים האחרונים', 'rst'),
            'title' => __('לפי שם', 'rst'),
        ];
    } else {
        return [
            'date-asc' => __('By date (from nearest)', 'rst'),
            'date-desc' => __('By date (from further)', 'rst'),
            'price-low' => __('By price (from the lowest)', 'rst'),
            'price-high' => __('By price (from higher)', 'rst'),
            'last_30' => __('Last 30 days', 'rst'),
            'title' => __('By name', 'rst'),
        ];
    }
}
function events_get_orderby_html_list()
{
    $orderby = events_get_orderby();
    echo '<ul class="filters__select dropdown__block">';

    $link = get_events_string_url();


    foreach ($orderby as $order => $value) {
        $link = add_query_arg('orderby', $order, $link);

        ?>
        <li><a href="<?php echo $link; ?>"><?php echo $value; ?></a></li>
    <?php }
    echo '</ul>';
}

if (!function_exists('wc_query_string_form_fields')) {
    function wc_query_string_form_fields($values = null, $exclude = array(), $current_key = '', $return = false)
    {
        if (is_null($values)) {
            // phpcs:ignore WordPress.Security.NonceVerification.Recommended
            $values = $_GET;
        } elseif (is_string($values)) {
            $url_parts = wp_parse_url($values);
            $values    = array();

            if (!empty($url_parts['query'])) {
                // This is to preserve full-stops, pluses and spaces in the query string when ran through parse_str.
                $replace_chars = array(
                    '.' => '{dot}',
                    '+' => '{plus}',
                );

                $query_string = str_replace(array_keys($replace_chars), array_values($replace_chars), $url_parts['query']);

                // Parse the string.
                parse_str($query_string, $parsed_query_string);

                // Convert the full-stops, pluses and spaces back and add to values array.
                foreach ($parsed_query_string as $key => $value) {
                    $new_key            = str_replace(array_values($replace_chars), array_keys($replace_chars), $key);
                    $new_value          = str_replace(array_values($replace_chars), array_keys($replace_chars), $value);
                    $values[$new_key] = $new_value;
                }
            }
        }
        $html = '';

        foreach ($values as $key => $value) {
            if (in_array($key, $exclude, true)) {
                continue;
            }
            if ($current_key) {
                $key = $current_key . '[' . $key . ']';
            }
            if (is_array($value)) {
                $html .= wc_query_string_form_fields($value, $exclude, $key, true);
            } else {
                $html .= '<input type="hidden" name="' . esc_attr($key) . '" value="' . esc_attr(wp_unslash($value)) . '" />';
            }
        }

        if ($return) {
            return $html;
        }

        echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

