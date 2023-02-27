<?php
    function get_filter_by_taxonomy_links($taxonomy = '', $title = '', $class = '', $query_type = 'AND') {
        $terms = get_terms([
            'taxonomy' => $taxonomy,
            'hide_empty' => false
        ]);
        $fn = '';
        if (strpos($taxonomy, 'group') !== false || strpos($taxonomy, 'post_tag') !== false) {
            $fn = "get_events_string_url";
        }
        ?>
            <div class="filters__style filters__item">
                <span class="label"><?php _e($title, 'rst') ?></span>
                <ul class="<?php echo $class ?> filter-select">
                    <?php foreach ($terms as $term) : ?>
                        <?php
                            $option_is_set = false;
                            if ($query_type === 'AND') {
                                $link = remove_query_arg($taxonomy, $fn());
                                $link_terms = isset($_GET[$taxonomy]) ? explode(',', $_GET[$taxonomy]) : [];
                                if (in_array($term->slug, $link_terms)) {
                                    $option_is_set = true;
                                    $key = array_search($term->slug, $link_terms);
                                    unset($link_terms[$key]);
                                } else {
                                    $link_terms[] = $term->slug;
                                } if (!empty($link_terms)) {
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
                        <li class="<?php echo $option_is_set ? 'active' : ''; ?>"><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php
    }
    function get_events_string_url() {

        $link = get_post_type_archive_link('product');

        if (isset($_GET['group'])) {
            $link = add_query_arg('group', wp_unslash($_GET['group']), $link);
        }
        return $link;
        if (isset($_GET['post_tag'])) {
            $link = add_query_arg('post_tag', wp_unslash($_GET['post_tag']), $link);
        }
        return $link;
    }

