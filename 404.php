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



<section class="error">
    <div class="container">
        <div class="error__wrapper">
            <h1 class="h1 error__title">404</h1>
            <h3 class="h3 error__subtitle"><?php _e( 'Not Found', 'RST' ); ?></h3>
            <h4 class="h4"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'RST' ); ?></h4>
            <a class="btn" href="<?php echo home_url() ; ?>"><?php _e( 'Back to Home', 'RST' ); ?></a>
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
