<?php

/**
 * Include header.php or header-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 */
get_header(); ?>
    <section class="content">
        <div class="content__wrapper">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php the_post();
                the_content();?>
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
