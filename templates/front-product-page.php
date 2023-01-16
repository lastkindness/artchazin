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
                    </div>
                </div>
                <div class="product__img mySwiper2 swiper">
                    <div class="product__img-wrap swiper-wrapper">
                        <div class="product__img-item swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="product__img-img">
                        </div>
                        <div class="product__img-item swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product2.jpg" alt="" class="product__img-img">
                        </div>
                        <div class="product__img-item swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product3.jpg" alt="" class="product__img-img">
                        </div>
                    </div>
                    <div class="product__navigation swiper-navigation">
                        <div class="swiper-button-prev icon icon-arrowr"></div>
                        <div class="swiper-button-next icon icon-arrowr"></div>
                    </div>
                </div>
            </div>
            <div class="product__container">
                <div class="product__content">
                    <div class="product__content-title h1">Name Of Product</div>
                    <div class="product__content-divider"></div>
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
    </div>
</section>

<?php get_footer('front'); ?>
