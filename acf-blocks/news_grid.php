<?php if($news_grid = get_sub_field('news_grid')): ?>
    <?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
    <section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="articles">
        <div class="container">
            <div class="articles__wrapper <?php if (count($news_grid)>3) : echo ' swiper'; endif ; ?>">
                <?php if($news_grid_title = get_sub_field('news_grid_title')): ?>
                    <h1 class="articles__title"><?php echo $news_grid_title;?></h1>
                <?php endif ; ?>
                <?php if($news_grid_description = get_sub_field('news_grid_description')): ?>
                    <div class="articles__descr">
                        <p class="p3"><?php echo $news_grid_description;?></p>
                    </div>
                <?php endif ; ?>
                <?php $white_cards = get_sub_field('news_grid_white_cards'); ?>
                <div class="articles__grid">
                    <?php while (have_rows('news_grid')) : the_row() ?>
                        <?php if($slide = get_sub_field('slide')) : ?>
                            <?php $title = get_the_title($slide);
                            $img = get_the_post_thumbnail_url($slide);
                            $link = get_the_permalink($slide);
                            $content = get_post_field('post_content', $slide);
                            ?>
                            <div class="card card_article <?php if ($white_cards) : echo ' card_white'; endif ; ?>">
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" title="<?php if ($title) echo $title;?>" alt="<?php if ($title) echo $title;?>" class="card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-regular.svg"
                                         alt="image icon"
                                         class="card__img">
                                <?php } ?>
                                <div class="card__content">
                                    <h2 class="card__title"><?php echo $title;?></h2>
                                    <?php if ($content) { ?>
                                        <div class="card__text p3"><?php echo $content;?></div>
                                    <?php } ?>
                                </div>
                                <?php $archive_product_btn = get_field('archive_post_btn'.$current_lang, 'options'); ?>
                                <?php if (!empty($link)) { ?>
                                    <a href="<?php echo $link;?>" class="btn card__btn">
                                        <?php echo $archive_product_btn;?>
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
