<?php if($products_grid = get_sub_field('products_grid')): ?>
    <?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
    <section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="cards-grid">
        <div class="container">
            <div class="cards-grid__wrapper">
                <?php if($products_grid_title = get_sub_field('products_grid_title')): ?>
                    <h1 class="cards-grid__title"><?php echo $products_grid_title;?></h1>
                <?php endif ; ?>
                <?php if($products_grid_description = get_sub_field('products_grid_description')): ?>
                    <div class="cards-grid__descr">
                        <p class="p3"><?php echo $products_grid_description;?></p>
                    </div>
                <?php endif ; ?>
                <?php $white_cards = get_sub_field('products_grid_white_cards'); ?>
                <div class="cards-grid__grid">
                    <?php while (have_rows('products_grid')) : the_row() ?>
                        <?php if($slide = get_sub_field('slide')) : ?>
                            <?php $title = get_the_title($slide);
                            $img = get_the_post_thumbnail_url($slide);
                            $link = get_the_permalink($slide);
                            ?>
                            <div class="card <?php if ($white_cards) : echo ' card_white'; endif ; ?>">
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" title="<?php if ($title) echo $title;?>" alt="<?php if ($title) echo $title;?>" class="card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-regular.svg"
                                         alt="image icon"
                                         class="card__img">
                                <?php } ?>
                                <div class="card__content">
                                    <h2 class="card__title"><?php echo $title;?></h2>
                                    <?php if ($product_description = get_post_meta($slide, 'product_description', false)[0]) { ?>
                                        <div class="card__text p3"><?php echo $product_description;?></div>
                                    <?php } ?>
                                    <?php $currency = get_field('currency'.$current_lang, 'options') ?>
                                    <?php if ($post_price = get_post_meta($slide, 'price', false)[0]) { ?>
                                        <div class="card__price p1"><?php echo $post_price;?> <?php echo $currency;?></div>
                                    <?php } ?>
                                </div>
                                <?php $archive_product_btn = get_field('archive_product_btn'.$current_lang, 'options'); ?>
                                <?php if (!empty($link)) { ?>
                                    <a href="<?php echo $link;?>" class="btn card__btn">
                                        <?php echo $archive_product_btn['title'];?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php endif ; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ; ?>
