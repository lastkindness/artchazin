<?php
/*
 * Template name: Front Product Page Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Gifts</a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Name Of Product</a></div>
        </div>
    </div>
</section>

<section class="product">
    <div class="container">
        <div class="product__wrapper">
            <div class="product__gallery">
                <div class="thumbs">
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="product__pictures mySwiper swiper">
                        <div class="product__pictures-wrap swiper-wrapper">
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product2.jpg" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__pictures-img">
                            </div>
                            <div class="product__pictures-item swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__pictures-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
                <div class="main">
                    <div class="product__img mySwiper2 swiper">
                        <div class="product__img-wrap swiper-wrapper">
                            <a class="product__img-item swiper-slide zoomer-box" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" data-fancybox="gallery">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="product__img-img">
                                <div class="lens" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png')"></div>
                            </a>
                            <a class="product__img-item swiper-slide zoomer-box" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/product2.jpg" data-fancybox="gallery">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product2.jpg" alt="" class="product__img-img">
                                <div class="lens" style="background-image: url(' <?php echo get_template_directory_uri(); ?>/assets/src/img/product2.jpg')"></div>
                            </a>
                            <a class="product__img-item swiper-slide zoomer-box" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" data-fancybox="gallery">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__img-img">
                                <div class="lens" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg')"></div>
                            </a>
                        </div>
<!--                        <div class="product__navigation swiper-navigation">
                            <div class="swiper-button-prev icon icon-arrowr"></div>
                            <div class="swiper-button-next icon icon-arrowr"></div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="product__content">
                <div class="product__content-title h1">Name Of Product</div>
                <div class="product__content-divider divider"></div>
                <div class="product__content-text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                <div class="product__content-price">999$</div>
                <a href="#" class="product__content-btn btn">Go To Order</a>
                <div class="product__content-item"><a href="#" class="product__content-link"><span class="icon icon-telephone"></span><span class="text">+97258-4797927</span></a></div>
                <div class="product__content-item"><a href="#" class="product__content-link"><span class="icon icon-mail"></span><span class="text">artchazin@gmail.com</span></a></div>
            </div>
            <div class="product__tabs">
                <div class="tabs">
                    <ul class="tabs__nav">
                        <li class="active">Details</li>
                        <li>More info</li>
                        <li>Order</li>
                        <li>More</li>
                    </ul>
                    <div class="tabs__content__wrap">
                        <div class="tabs__content active">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non mollitia dignissimos rem id assumenda nisi vero asperiores praesentium illo fugiat nulla tempora nostrum.</p>
                        </div>
                        <div class="tabs__content">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non mollitia dignissimos rem id assumenda nisi vero asperiores praesentium illo fugiat nulla tempora nostrum voluptate laborum pariatur impedit vitae odio ullam, laudantium dicta. Illo reiciendis, accusamus incidunt est odio veritatis voluptatibus officiis itaque vel molestiae. Officiis cumque excepturi quos labore repellat.</p>
                        </div>
                        <div class="tabs__content">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non mollitia dignissimos rem id assumenda nisi vero asperiores praesentium illo fugiat nulla tempora nostrum voluptate laborum pariatur impedit vitae odio ullam, laudantium dicta.</p>
                        </div>
                        <div class="tabs__content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-gallery-slider">
    <div class="container">
        <div class="product-gallery-slider__wrapper swiper">
            <h2 class="product-gallery-slider__title">You may like to</h2>
            <div class="product-gallery-slider__cardwrap swiper-wrapper">
                <div class="product-gallery-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="product-gallery-slider__card-img card__img">
                    <div class="card__content product-gallery-slider__card-content">
                        <h2 class="product-gallery-slider__card-title card__title">NAME OF PRODUCT PRODUCT</h2>
                        <div class="card__text p3 product-gallery-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                        <div class="product-gallery-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn product-gallery-slider__card-btn">Go To Order</a>
                </div>
                <div class="product-gallery-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard1.png" alt="" class="product-gallery-slider__card-img card__img">
                    <div class="card__content product-gallery-slider__card-content">
                        <h2 class="product-gallery-slider__card-title card__title">NAME OF PRODUCT PRODUCT</h2>
                        <div class="card__text p3 product-gallery-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
                        <div class="product-gallery-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn product-gallery-slider__card-btn">Go To Order</a>
                </div>
                <div class="product-gallery-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productheart.png" alt="" class="product-gallery-slider__card-img card__img">
                    <div class="card__content product-gallery-slider__card-content">
                        <h2 class="product-gallery-slider__card-title card__title">NAME OF PRODUCT </h2>
                        <div class="card__text p3 product-gallery-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh . Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                        <div class="product-gallery-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn product-gallery-slider__card-btn">Go To Order</a>
                </div>
                <div class="product-gallery-slider__card card swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/torah2.png" alt="" class="product-gallery-slider__card-img card__img">
                    <div class="card__content product-gallery-slider__card-content">
                        <h2 class="product-gallery-slider__card-title card__title">NAME OF PRODUCT PRODUCT PRODUCT</h2>
                        <div class="card__text p3 product-gallery-slider__card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
                        <div class="product-gallery-slider__card-price card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn product-gallery-slider__card-btn">Go To Order</a>
                </div>
            </div>
            <div class="product-gallery-slider__navigation swiper-navigation">
                <div class="swiper-button-prev icon icon-arrowr"></div>
                <div class="swiper-button-next icon icon-arrowr"></div>
            </div>
            <div class="product-gallery-slider__pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
