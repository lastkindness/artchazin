<?php
/*
 * Template name: Front Home Template
 */

get_header('front'); ?>

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/herobg.jpg')">
    <div class="container">
        <div class="hero__wrapper swiper">
            <div class="hero__slider swiper-wrapper">
                <div class="hero__slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h1 class="hero__slide-title">Lorem Ipsum</h1>
                        <p class="hero__slide-descr p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn btn_lite">Go To Order</a>
                    </div>
                </div>
                <div class="hero__slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/onepost.jpg" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h1 class="hero__slide-title">Lorem Light</h1>
                        <p class="hero__slide-descr p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn btn_lite">Go To Order</a>
                    </div>
                </div>
                <div class="hero__slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/torah1.png" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h1 class="hero__slide-title">Lorem Book</h1>
                        <p class="hero__slide-descr p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn btn_lite">Go To Order</a>
                    </div>
                </div>
                <div class="hero__slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/torah2.png" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h1 class="hero__slide-title">Lorem Tower</h1>
                        <p class="hero__slide-descr p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn btn_lite">Go To Order</a>
                    </div>
                </div>
            </div>
            <div class="hero__navigation">
                <div class="swiper-button-next icon icon-arrowr"></div>
                <div class="swiper-button-prev icon icon-arrowr"></div>
            </div>
            <div class="hero__pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="top-slider">
    <div class="container">
        <div class="top-slider__wrapper swiper">
            <h1 class="top-slider__title">SOME GOOD TOTLE</h1>
            <div class="top-slider__divider"></div>
            <div class="top-slider__descr">
                <p class="p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="top-slider__cardwrap swiper-wrapper">
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard1.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh . Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/torah2.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
            </div>
            <div class="top-slider__navigation swiper-navigation">
                <div class="swiper-button-prev icon icon-arrowr"></div>
                <div class="swiper-button-next icon icon-arrowr"></div>
            </div>
            <div class="top-slider__pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/bgposthero.jpg')" >
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__descr ">
                <h1 class="banner__descr-title">Lorem Ipsum</h1>
                <p class="banner__descr-descr p2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <div class="banner__descr-readmore">
                    <a href="" class="banner__descr-readmore-link"><span>Read More</span><span class="icon icon-arrowr"></span></a>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="banner__img">
            <div class="banner__box">
                <div class="banner__box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box-item-img">
                    <div class="banner__box-item-descr">
                        <h6 class="banner__box-item-descr-title">Some Good Title</h6>
                        <p class="banner__box-item-descr-text p5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                    </div>
                </div>
                <div class="banner__box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box-item-img">
                    <div class="banner__box-item-descr">
                        <h6 class="banner__box-item-descr-title">Some Good Title</h6>
                        <p class="banner__box-item-descr-text p5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                    </div>
                </div>
                <div class="banner__box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box-item-img">
                    <div class="banner__box-item-descr">
                        <h6 class="banner__box-item-descr-title">Some Good Title</h6>
                        <p class="banner__box-item-descr-text p5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                    </div>
                </div>
                <div class="banner__box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="banner__box-item-img">
                    <div class="banner__box-item-descr">
                        <h6 class="banner__box-item-descr-title">Some Good Title</h6>
                        <p class="banner__box-item-descr-text p5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wall" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/peoplebg.jpg')" >
    <div class="container">
        <div class="wall__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/bigpentagram.svg" alt="" class="wall__pentagram">
            <p class="wall__descr"><span class="wall__descr-mark">Lorem ipsum</span> Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy</p>
        </div>
    </div>
</section>

<section class="top-slider">
    <div class="container">
        <div class="top-slider__wrapper swiper">
            <h1 class="top-slider__title">SOME GOOD TOTLE</h1>
            <div class="top-slider__divider"></div>
            <div class="top-slider__descr">
                <p class="p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="top-slider__cardwrap swiper-wrapper">
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
                <div class="top-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="top-slider__card-img card__img">
                    <div class="card__content top-slider__card-content">
                        <h2 class="top-slider__card-title card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3 top-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="top-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn top-slider__card-btn">Go To Order</a>
                </div>
            </div>
            <div class="top-slider__navigation swiper-navigation">
                <div class="swiper-button-prev icon icon-arrowr"></div>
                <div class="swiper-button-next icon icon-arrowr"></div>
            </div>
            <div class="hero__pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="callback" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/peoplecallback.jpg')">
    <div class="container">
        <div class="callback__wrapper">
            <div class="callback__title h1">get a call back</div>
            <form class="callback__form" action="/my-handling-form-page" method="post">
                    <input class="callback__form-name" type="text" id="name" name="user_name" placeholder="Name">
                    <input class="callback__form-phone" type="email" id="mail" name="user_email" placeholder="Phone">
                    <textarea class="callback__form-comment" id="msg" name="user_message" placeholder="Comment"></textarea>
                    <input class="callbacak__form-button btn btn_lite" value="Call Me" type="btn" id="btn" name="user_btn">
            </form>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
