<?php

get_header();

?>
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <?php if(function_exists('bcn_display'))
            { bcn_display();
            } ?>
        </div>
    </div>
</section>

<section class="main-title">
    <div class="container">
        <div class="main-title__wrapper">
            <h1 class="main-title__title"><?php echo single_term_title();?></h1>
            <div class="main-title__divider divider"></div>
            <div class="main-title__descr">
                <p class="p3"><?php echo term_description();?></p>
            </div>
        </div>
    </div>
</section>

<section class="filters">
    <div class="container">
        <div class="filters__wrapper">
            <?php
            global $wp_query;
            ?>
            <?php
            $secondaru_query = new WP_Query([
                'posts_per_page' => 9,
            ]);
            if ( $secondaru_query->have_posts() ) : do_action('ocean_after_content_wrap'); endif;
            ?>
            <?php $terms = get_terms(array(
                'taxonomy' => 'group',
                'hide_empty' => false,
            ));

            $current_term_id = get_queried_object_id();

            if (!empty($terms) && !is_wp_error($terms)) {?>
            <div class="dropdown filters__item">
                <span class="sorting-desc dropdown__title">
                    <?php
                    if($current_lang=='he') {
                        _e('קטגוריות:', 'rst');
                    } else {
                        _e('Сategories:', 'rst');
                    }
                    ?>
                </span>
                <?php
                $taxonomy = 'group';
                $terms = get_terms($taxonomy, array('parent' => 0, 'hide_empty' => false));

                function display_child_terms($term_id, $taxonomy, $current_term_id) {
                    $terms = get_terms($taxonomy, array('parent' => $term_id, 'hide_empty' => false));
                    if ($terms) {
                        echo '<ul>';
                        foreach ($terms as $term) {
                            $class = ($current_term_id == $term->term_id) ? ' class="active"' : '';
                            echo '<li' . $class . '><a href="' . get_term_link($term) . '">' . $term->name . '</a>';
                            display_child_terms($term->term_id, $taxonomy, $current_term_id);
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                }

                echo '<ul class="dropdown__block filters__select filter-groups">';
                foreach ($terms as $term) {
                    $class = ($current_term_id == $term->term_id) ? ' class="active"' : '';
                    echo '<li' . $class . '><a href="' . get_term_link($term) . '">' . $term->name . '</a>';
                    display_child_terms($term->term_id, $taxonomy, $current_term_id);
                    echo '</li>';
                }
                echo '</ul></div>';}?>
            </div>
        </div>
</section>

<section class="cards-grid taxonomy">
    <div class="container">
        <div class="cards-grid__wrapper">
            <div class="cards-grid__grid">
                <?php
                $id = get_queried_object_id();
                $terms = get_term_children($id, 'group');
                $taxArgs = [];
                if(count($terms)==0) {
                    $taxArgs = array($id);
                } else {
                    $taxArgs = $terms;
                }
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'paged' => $paged,
                    'posts_per_page' => '9',
                    'post_type' => 'product',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'group',
                            'field' => 'id',
                            'terms' => $taxArgs,
                        )
                    ),
                );
                $product = new WP_Query( $args );
                if ( $product->have_posts() ) : ?>
                    <?php while( $product->have_posts() ) : $product->the_post();
                        if( get_the_title() ) : ?>
                            <div class="card">
                                <?php
                                $post_id = get_the_ID();
                                $title = get_the_title($post_id);
                                $img = get_the_post_thumbnail_url($post_id);
                                $currency = get_field('currency'.$current_lang, 'options');
                                $product_description = get_post_meta($post_id, 'product_description', false)[0];
                                $post_price = get_post_meta($post_id, 'price', false)[0];
                                ?>
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" alt="<?php if ($title) echo $title;?>" class="card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/image-regular.svg"
                                         alt="image icon"
                                         class="card__img">
                                <?php } ?>
                                <div class="card__content">
                                    <h2 class="card__title"><?php echo $title; ?></h2>
                                    <?php if ($product_description = get_post_meta($post_id, 'product_description', false)[0]) { ?>
                                        <div class="card__text p3"><?php echo $product_description;?></div>
                                    <?php } ?>
                                    <?php if ($post_price = get_post_meta($post_id, 'price', false)[0]) { ?>
                                        <div class="card__price p1"><?php echo $post_price;?> <?php echo $currency;?></div>
                                    <?php } ?>
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="btn card__btn">Go To Order</a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile;?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="cards-grid__pagination pagination">
                <?php
                $big = 999999999; // need an unlikely integer

                $paginate_links = paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'type' => 'array',
                    'prev_text'    => __('« '),
                    'next_text'    => __(' »'),
                ) );
                if ($wp_query->max_num_pages > 1) :
                    ?>
                    <div class="cards-grid__pagination pagination">
                        <?php
                        foreach ( $paginate_links as $page ) {
                            echo '<div class="pagination__item">' . $page . '</div>';
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Include footer.php of footer-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 */
get_footer();

?>
