<?php if($top_slider = get_sub_field('top_slider')): ?>
    <?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
    <section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="top-slider">
        <div class="container">
            <div class="top-slider__wrapper <?php if (count($top_slider)>3) : echo ' swiper'; endif ; ?>">
                <?php if($top_slider_title = get_sub_field('top_slider_title')): ?>
                    <h1 class="top-slider__title"><?php echo $top_slider_title;?></h1>
                <?php endif ; ?>
                <?php if($top_slider_description = get_sub_field('top_slider_description')): ?>
                    <div class="top-slider__descr">
                        <p class="p3"><?php echo $top_slider_description;?></p>
                    </div>
                <?php endif ; ?>
                <div class="top-slider__cardwrap <?php if (count($top_slider)>3) : echo ' swiper-wrapper'; endif ; ?>">
                    <?php while (have_rows('top_slider')) : the_row() ?>
                        <?php if($slide = get_sub_field('slide')) : ?>
                            <?php $title = get_the_title($slide);
                            $img = get_the_post_thumbnail_url($slide);
                            $link = get_the_permalink($slide); ?>
                            <div class="top-slider__card card <?php if (count($top_slider)>3) : echo ' swiper-slide'; endif ; ?>">
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" title="<?php if ($title) echo $title;?>" alt="<?php if ($title) echo $title;?>" class="top-slider__card-img card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-regular.svg"
                                         alt="image icon"
                                         class="product-gallery-slider__card-img card__img">
                                <?php } ?>
                                <div class="card__content top-slider__card-content">
                                    <h2 class="top-slider__card-title card__title"><?php echo $title;?></h2>
                                    <?php if ($product_description = get_post_meta($slide, 'product_description', false)[0]) { ?>
                                        <div class="card__text p3 top-slider__card-text"><?php echo $product_description;?></div>
                                    <?php } ?>
                                    <?php $currency = get_field('currency'.$current_lang, 'options') ?>
                                    <?php if ($post_price = get_post_meta($slide, 'price', false)[0]) { ?>
                                        <div class="top-slider__card-price card__price p1"><?php echo $post_price;?> <?php echo $currency;?></div>
                                    <?php } ?>
                                </div>
                                <?php $archive_product_btn = get_field('archive_product_btn'.$current_lang, 'options'); ?>
                                <?php if (!empty($link)) { ?>
                                    <a href="<?php echo $link;?>" class="btn card__btn top-slider__card-btn">
                                        <?php echo $archive_product_btn['title'];?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php endif ; ?>
                    <?php endwhile; ?>
                </div>
                <?php if (count($top_slider)>3) : ?>
                    <div class="top-slider__navigation swiper-navigation">
                        <div class="swiper-button-prev icon icon-arrowr"></div>
                        <div class="swiper-button-next icon icon-arrowr"></div>
                    </div>
                    <div class="top-slider__pagination swiper-pagination"></div>
                <?php endif ; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
