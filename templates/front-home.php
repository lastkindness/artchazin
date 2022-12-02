<?php
/*
 * Template name: Front Home Template
 */

get_header('front'); ?>

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/herobg.jpg')">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__slider">
                <div class="hero__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h2 class="hero__slide-title h2">Lorem Ipsum</h2>
                        <p class="hero__slide-descr p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn btn_lite">Go To Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-slider">
    <div class="container">
        <div class="top-slider__wrapper">
            <h1 class="top-slider-title">SOME GOOD TOTLE</h1>
            <div class="top-slider-divider"></div>
            <div class="top-slider-descr">
            <p3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p3>
            </div>
            <div class="row">
                <div class="top-slider__cardwrap">
                    <div class="top-slider__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img">
                        <h2 class="top-slider__card-subtitle">NAME OF PRODUCT</h2>
                        <p1 class="top-slider__card-price">999$</p1>
                    </div>
                    <div class="top-slider__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img">
                        <h2 class="top-slider__card-subtitle">NAME OF PRODUCT</h2>
                        <p1 class="top-slider__card-price">999$</p1>
                    </div>
                    <div class="top-slider__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img">
                        <h2 class="top-slider__card-subtitle">NAME OF PRODUCT</h2>
                        <p1 class="top-slider__card-price">999$</p1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/bgposthero.jpg')" >
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__descr">
                <h1 class="banner__descr-title">Lorem Ipsum</h1>
                <p2 class="banner__descr-descr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p2>
                <div class="banner__descr-readmore">
                    <a href="" class="banner__descr-readmore-link">Read More</a>
                    <div class="banner__descr-readmore-arrow icon icon-arrowr"><a href="" class="banner__descr-readmore-arrow-link"></a></div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="banner__img">
            <div class="banner__box">
                <div class="banner__box__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box__item-img">
                    <div class="banner__box__item__descr">
                        <h6 class="banner__box__item__descr-title">Some Good Title</h6>
                        <p5 class="banner__box__item__descr-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p5>
                    </div>
                </div>
                <div class="banner__box__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box__item-img">
                    <div class="banner__box__item__descr">
                        <h6 class="banner__box__item__descr-title">Some Good Title</h6>
                        <p5 class="banner__box__item__descr-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p5>
                    </div>
                </div>
                <div class="banner__box__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box__item-img">
                    <div class="banner__box__item__descr">
                        <h6 class="banner__box__item__descr-title">Some Good Title</h6>
                        <p5 class="banner__box__item__descr-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p5>
                    </div>
                </div>
                <div class="banner__box__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box__item-img">
                    <div class="banner__box__item__descr">
                        <h6 class="banner__box__item__descr-title">Some Good Title</h6>
                        <p5 class="banner__box__item__descr-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
