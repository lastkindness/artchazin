<?php
/*
 * Template name: Front 404 Template
 */

get_header('front'); ?>

<section class="error parallax" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/peoplecallback.jpg')">
    <div class="container">
        <div class="error__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/404.svg" alt="" class="error__img">
            <p class="error__text h6">Somthing Wrong <br> The Page You’re Looking For Was Not Found</p>
            <button class="error__btn btn_lite"><span class="icon icon-smallarrow"></span>Go To Home Page</button>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
