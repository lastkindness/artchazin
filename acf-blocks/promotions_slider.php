<?php if($promotions_slider = get_sub_field('promotions_slider')): ?>
    <?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
    <section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="top-slider">
        <div class="container">
            <div class="top-slider__wrapper <?php if (count($promotions_slider)>3) : echo ' swiper'; endif ; ?>">
                <?php if($promotions_slider_title = get_sub_field('promotions_slider_title')): ?>
                    <h1 class="top-slider__title"><?php echo $promotions_slider_title;?></h1>
                <?php endif ; ?>
                <?php if($promotions_slider_description = get_sub_field('promotions_slider_description')): ?>
                    <div class="top-slider__descr">
                        <p class="p3"><?php echo $promotions_slider_description;?></p>
                    </div>
                <?php endif ; ?>
                <?php $white_cards = get_sub_field('promotions_white_cards'); ?>
                <div class="top-slider__cardwrap <?php if (count($promotions_slider)>3) : echo ' swiper-wrapper'; endif ; ?>">
                    <?php while (have_rows('promotions_slider')) : the_row() ?>
                        <?php if($slide = get_sub_field('slide')) : ?>
                            <?php $title = get_the_title($slide);
                            $img = get_the_post_thumbnail_url($slide);
                            $link = get_the_permalink($slide);
                            $content = get_post_field('post_content', $slide);
                            ?>
                            <div class="top-slider__card card card_article <?php if ($white_cards) : echo ' card_white'; endif ; ?> <?php if (count($promotions_slider)>3) : echo ' swiper-slide'; endif ; ?>">
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" title="<?php if ($title) echo $title;?>" alt="<?php if ($title) echo $title;?>" class="top-slider__card-img card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-regular.svg"
                                         alt="image icon"
                                         class="card__img">
                                <?php } ?>
                                <div class="card__content top-slider__card-content">
                                    <h2 class="top-slider__card-title card__title"><?php echo $title;?></h2>
                                    <?php if ($content) { ?>
                                        <div class="card__text p3 top-slider__card-text"><?php echo $content;?></div>
                                    <?php } ?>
                                </div>
                                <?php $archive_product_btn = get_field('archive_post_btn'.$current_lang, 'options'); ?>
                                <?php if (!empty($link)) { ?>
                                    <a href="<?php echo $link;?>" class="btn card__btn top-slider__card-btn">
                                        <?php echo $archive_product_btn;?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php endif ; ?>
                    <?php endwhile; ?>
                </div>
                <?php if (count($promotions_slider)>3) : ?>
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
