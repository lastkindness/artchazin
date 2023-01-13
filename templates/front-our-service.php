<?php
/*
 * Template name: Front Our Service Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Contact Us</a></div>
        </div>
    </div>
</section>

<section class="service">
    <div class="container">
        <div class="service__wrapper">
            <div class="service__title h1">About Our Service:</div>
            <div class="service__container">
                <div class="service__descr">
                    <div class="service__descr-title h3">To us every customer is important and special!</div>
                    <div class="service__descr-divider"></div>
                    <div class="service__descr-text p">We invest all our efforts in providing every customer facing us with courteous service, for every question and every request we will always be ready to give the appropriate response.
                        Apart from the special service we like to provide our customers with, here at Art Chazin we insist on giving you only the best, and take special care to provide you with a perfect, finished and flawless product. We do not compromise on the quality of any of our materials and certainly not on the artistic level of our designs. You will get your product at the appropriate level of a finished work of art, it is of utmost importance to us that you will be satisfied with your product and will get your value for money.
                        At our customer service department you will be able to get answers to your questions on any subject in any of the following 7 languages, English, French, Hebrew, Russian, Yiddish, German and Flemish.</div>
                </div>
                <div class="service__picture" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/peoplecallback.jpg')">
                    <div class="service__picture-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/bigdavidestar.svg" alt="" class="service__picture-davidestar">
                        <p class="service__picture-descr"><span class="service__picture-mark">Lorem ipsum</span> Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
