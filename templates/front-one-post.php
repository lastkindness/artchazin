<?php
/*
 * Template name: Front One Post Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">News And Articles</a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Post</a></div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <div class="post__wrapper">
            <div class="post__title h1">The Marriage Contract (Ketubah)</div>
            <div class="post__container">
                <div class="post__descr">
                    <div class="post__descr-title h3">The ketubah is a unilateral agreement drawn by witnesses in accordance with Jewish civil law</div>
                    <div class="post__descr-divider"></div>
                    <div class="post__descr-text p">It is not a ceremonial document of scripture or prayer. That is why it is written in Aramaic, the technical legal language of Talmudic law, rather than in Hebrew, the language of the "Song of Songs." Neither is it a state document establishing the new relationship of man and woman. It makes no mention of the confirmation of G‑d or of society. It is not an instrument of the privileged class, as in ancient societies, but one obligatory on every person. It is also not an affirmation of perpetual love. It is a statement of law that provides the framework of love</div>
                </div>
                <div class="post__picture" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/onepost.jpg')">
                    <div class="post__picture-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pentagram.svg" alt="" class="post__picture-davidestar">
                        <p class="post__picture-descr"><span class="post__picture-mark">Lorem ipsum</span> Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
