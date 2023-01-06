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
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
                <a class="card_article card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__title h2">NAME OF POST</div>
                    <div class="card__text p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
