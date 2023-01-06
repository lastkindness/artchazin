<?php
/*
 * Template name: Front News Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">News And Articles</a></div>
        </div>
    </div>
</section>

<section class="articles">
    <div class="container">
        <div class="articles__wrapper">
            <h1 class="articles__title">News and Articles</h1>
            <div class="articles__grid">
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
                <div class="card card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF POST</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                    <a href="#" class="btn card__btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
