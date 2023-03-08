<?php

/**
 * Include header.php or header-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 */
get_header(); ?>
    <section class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrapper">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                } ?>
            </div>
        </div>
    </section>
    <section class="post">
        <div class="container">
            <div class="post__wrapper">
                <div class="post__title h1"><?php the_title(); ?></div>
                <div class="post__container">
                    <div class="post__descr">
                        <?php if ($sub_title = get_field('sub_title')) { ?>
                            <div class="post__descr-title h3"><?php echo $sub_title;?></div>
                        <?php } ?>
                        <div class="post__descr-divider divider"></div>
                        <div class="post__descr-text p">
                            <?php the_post();
                            the_content();?>
                        </div>
                    </div>
                    <div class="post__picture">
                        <?php if ($img = get_the_post_thumbnail_url()) { ?>
                            <img src="<?php echo $img;?>" alt="Post Image Thumbnail" class="post__picture-img">
                        <?php } ?>
                        <?php if ($title_on_image = get_field('title_on_image')) { ?>
                            <p class="post__picture-descr">
                                <?php if ($title_on_image_select = get_field('title_on_image_select')) { ?>
                                    <span class="post__picture-mark"><?php echo $title_on_image_select;?></span>
                                <?php } ?>
                                <?php echo $title_on_image;?>
                            </p>
                        <?php } ?>
                    </div>
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
