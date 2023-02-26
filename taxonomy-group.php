<?php

get_header();

?>
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            } ?>
        </div>
    </div>
</section>
<?php $main_title = get_field('product_archive_main_title'.$current_lang, 'options');
$main_descr = get_field('product_archive_main_descr'.$current_lang, 'options');
if ($main_title) { ?>
    <section class="main-title">
        <div class="container">
            <div class="main-title__wrapper">
                <h1 class="main-title__title"><?php echo $main_title;?></h1>
                <?php if ($main_descr) { ?>
                    <div class="main-title__divider divider"></div>
                    <div class="main-title__descr">
                        <p class="p3"><?php echo $main_descr;?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<section class="filters">
    <div class="container">
        <div class="filters__wrapper">
            <?php add_filter( 'wp_dropdown_cats', '__return_false' ); ?>
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
                    'posts_per_page' => '3',
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
                <?php wp_pagenavi(array('query' => $product)); ?>
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
