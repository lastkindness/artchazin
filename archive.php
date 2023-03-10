<?php
get_header();

?>
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <?php if(function_exists('bcn_display'))
            { bcn_display(); } ?>
        </div>
    </div>
</section>


<section class="description">
    <div class="container">
        <div class="description__wrapper">
            <div class="description__descr">
                <div class="description__descr-title h1"><?php echo single_cat_title();?></div>
                <div class="description__descr-divider divider"></div>
                <p class="description__descr-text"><?php echo category_description();?></p>
            </div>
        </div>
    </div>
</section>

<section class="articles">
    <div class="container">
        <div class="articles__wrapper">
            <div class="articles__grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php $title = get_the_title();
                    $img = get_the_post_thumbnail_url();
                    $link = get_the_permalink();
                    $content = get_the_content();
                    ?>
                    <div class="card card_article">
                        <?php if($img) : ?>
                            <img src="<?php echo $img;?>" alt="" class="card__img">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image-regular.svg" alt="" class="card__img">
                        <?php endif; ?>
                        <div class="card__content">
                            <h2 class="card__title"><?php echo $title;?></h2>
                            <p class="card__text p3"><?php echo $content;?></p>
                        </div>
                        <a href="<?php echo $link;?>" class="btn card__btn">
                            <?php if ($current_lang == 'he') {
                                echo 'קרא עוד';
                            } else {
                                echo 'Read More';
                            }?>
                        </a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Include footer.php of footer-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 */
get_footer();

?>
