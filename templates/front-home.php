<?php
/*
 * Template name: Front Home Template
 */

get_header('front'); ?>

<section class="hero">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__slider">
                <div class="hero__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/product.png" alt="" class="hero__slide-img">
                    <div class="hero__slide-content">
                        <h2 class="hero__slide-title h2">Lorem Ipsum</h2>
                        <p class="hero__slide-descr p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="hero__slide-btn btn">Go To Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-slider">
    <div class="container">
        <div class="top-slider__wrapper">

        </div>
    </div>
</section>

<?php get_footer('front'); ?>
