<?php

/**
 * 404 template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 */

?>

<?php

/**
 * Include header.php or require header-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 * @link        https://wp-kama.ru/functuion/get_header
 */
get_header();

?>

<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="error parallax" style="background-image: url('<?php if($background = get_field('404_background'.$current_lang, 'option')['url'])
        { echo $background; }
        else { echo(get_template_directory_uri()."/assets/src/img/peoplecallback.jpg");}
    echo "')";?>">
    <div class="container">
        <div class="error__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/404.svg" alt="" class="error__img">
            <?php if($title = get_field('404_title'.$current_lang, 'option')) : ?>
                <p class="error__text h6"><?php echo $title;?></p>
            <?php endif; ?>
            <?php if($button = get_field('404_button'.$current_lang, 'option')) : ?>
                <a href="/" class="error__btn btn_lite">
                    <span class="icon icon-smallarrow"></span><?php echo $button;?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php

/**
 * Include footer.php or require footer-xxx.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 * @link        https://wp-kama.ru/functuion/get_footer
 */
get_footer();

?>
