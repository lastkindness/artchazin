<?php

/**
 * Single post template
 *
 * @package     WordPress
 * @subpackage  RED Starter Theme
 * @since       1.0.0
 * @author      Luke Kortunov
 */

?>

<?php

/**
 * Include header.php or header-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 */
get_header();

?>
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
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="product">
    <div class="container">
        <div class="product__wrapper">
            <div class="product__gallery">
                <?php $product_images = have_rows('product_images') ?>
                <?php if ($product_images) : ?>
                    <div class="thumbs">
                        <div class="swiper-button swiper-button-next icon icon-arrowr"></div>
                        <div class="product__pictures mySwiper swiper">
                            <div class="product__pictures-wrap swiper-wrapper">
                                <?php $count = 0; while (have_rows('product_images')) : the_row(); ?>
                                    <?php if($img = get_sub_field('img')) : ?>
                                        <div class="product__pictures-item swiper-slide">
                                            <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" class="product__pictures-img">
                                        </div>
                                    <?php endif ; ?>
                                <?php $count++; endwhile; ?>
                            </div>
                        </div>
                        <div class="swiper-button swiper-button-prev icon icon-arrowr"></div>
                    </div>
                    <div class="main">
                        <div class="product__img mySwiper2 swiper">
                            <div class="product__img-wrap swiper-wrapper">
                                <?php $count = 0; while (have_rows('product_images')) : the_row(); ?>
                                    <?php if($img = get_sub_field('img')) : ?>
                                        <a class="product__img-item swiper-slide zoomer-box"
                                           href="<?php echo $img['url'];?>"
                                           data-fancybox="gallery">
                                            <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>"
                                                 class="product__img-img">
                                            <div class="lens"
                                                 style="background-image: url('<?php echo $img['url'];?>')">
                                            </div>
                                        </a>
                                    <?php endif ; ?>
                                <?php $count++; endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="product__content">
                <div class="product__content-title h1"><?php the_title();?></div>
                <div class="product__content-divider divider"></div>
                <?php the_post();?>
                <?php $product_description = get_field('product_description'); ?>
                <?php if (!empty($product_description)) { ?>
                    <div class="product__content-text p"><?php echo $product_description;?></div>
                <?php } ?>
                <?php $price = get_field('price') ?>
                <?php $currency = get_field('currency'.$current_lang, 'options') ?>
                <?php if (!empty($price)) { ?>
                    <div class="product__content-price"><?php echo $price;?> <?php echo $currency;?></div>
                <?php } ?>
                <?php $archive_product_btn = get_field('archive_product_btn'.$current_lang, 'options'); ?>
                <?php if (!empty($archive_product_btn)) { ?>
                    <a href="<?php echo $archive_product_btn['url'];?>" class="product__content-btn btn"><?php echo $archive_product_btn['title'];?></a>
                <?php } ?>
                <?php $archive_product_phone = get_field('archive_product_phone'.$current_lang, 'options'); ?>
                <?php if (!empty($archive_product_phone)) { ?>
                    <div class="product__content-item">
                        <a href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $archive_product_phone))?>" class="product__content-link">
                            <span class="icon icon-telephone"></span>
                            <span class="text"><?php echo $archive_product_phone;?></span>
                        </a>
                    </div>
                <?php } ?>
                <?php $archive_product_email = get_field('archive_product_email'.$current_lang, 'options'); ?>
                <?php if (!empty($archive_product_email)) { ?>
                    <div class="product__content-item">
                        <a href="<?php echo $archive_product_email;?>" class="product__content-link">
                            <span class="icon icon-mail"></span>
                            <span class="text"><?php echo $archive_product_email;?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <?php $tabs = have_rows('tabs') ?>
            <?php if ($tabs) : ?>
                <div class="product__tabs">
                    <div class="tabs">
                        <ul class="tabs__nav">
                            <?php $count = 0; while (have_rows('tabs')) : the_row(); ?>
                                <?php if($tab_title = get_sub_field('tab_title')) : ?>
                                    <li <?php if( $count == 0 ) : echo 'class="active"'; endif; ?>>
                                        <?php echo $tab_title;?>
                                    </li>
                                <?php endif ; ?>
                            <?php $count++; endwhile; ?>
                        </ul>
                        <div class="tabs__content__wrap">
                            <?php $count = 0; while (have_rows('tabs')) : the_row(); ?>
                                <?php if($tab_text = get_sub_field('tab_text')) : ?>
                                    <div class="tabs__content <?php if( $count == 0 ) : echo ' active'; endif; ?> ">
                                        <p><?php echo $tab_text;?></p>
                                    </div>
                                <?php endif ; ?>
                            <?php $count++; endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="product-gallery-slider">
    <div class="container">
        <div class="product-gallery-slider__wrapper swiper">
            <?php $product_title_for_slider = get_field('product_title_for_slider'.$current_lang, 'options'); ?>
            <?php if (!empty($product_title_for_slider)) { ?>
                <h2 class="product-gallery-slider__title"><?php echo $product_title_for_slider;?></h2>
            <?php } ?>
            <?php $slider = have_rows('slider') ?>
            <?php if ($slider) : ?>
                <div class="product-gallery-slider__cardwrap swiper-wrapper">
                    <?php while (have_rows('slider')) : the_row() ?>
                        <?php if($slide = get_sub_field('slide')) : ?>
                            <?php $title = get_the_title($slide);
                                $img = get_the_post_thumbnail_url($slide);
                                $link = get_the_permalink($slide);
                            ?>
                            <div class="product-gallery-slider__card card swiper-slide">
                                <?php if ($img) { ?>
                                    <img src="<?php echo $img;?>" alt="<?php if ($title) echo $title;?>" class="product-gallery-slider__card-img card__img">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/image-regular.svg"
                                         alt="image icon"
                                         class="product-gallery-slider__card-img card__img">
                                <?php } ?>
                                <div class="card__content product-gallery-slider__card-content">
                                    <h2 class="product-gallery-slider__card-title card__title"><?php echo $title;?></h2>
                                    <?php if ($product_description = get_post_meta($slide, 'product_description', false)[0]) { ?>
                                        <div class="card__text p3 product-gallery-slider__card-text">
                                            <?php echo $product_description;?>
                                        </div>
                                    <?php } ?>
                                    <?php $currency = get_field('currency'.$current_lang, 'options') ?>
                                    <?php if ($post_price = get_post_meta($slide, 'price', false)[0]) { ?>
                                        <div class="product-gallery-slider__card-price card__price p1"><?php echo $post_price;?> <?php echo $currency;?></div>
                                    <?php } ?>
                                </div>
                                <?php $archive_product_btn = get_field('archive_product_btn'.$current_lang, 'options'); ?>
                                <?php if (!empty($link)) { ?>
                                    <a href="<?php echo $link;?>" class="btn card__btn product-gallery-slider__card-btn">
                                        <?php echo $archive_product_btn['title'];?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php endif ; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="product-gallery-slider__navigation swiper-navigation">
                <div class="swiper-button-prev icon icon-arrowr"></div>
                <div class="swiper-button-next icon icon-arrowr"></div>
            </div>
            <div class="product-gallery-slider__pagination swiper-pagination"></div>
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
