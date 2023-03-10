<?php get_header();?>
    <?php if(!is_front_page()) : ?>
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
    <?php endif;?>
    <?php if(!is_front_page()) : ?>
        <section class="main-title">
            <div class="container">
                <div class="main-title__wrapper">
                    <h1 class="main-title__title"><?php the_title();?></h1>
                </div>
            </div>
        </section>
    <?php endif;?>
    <?php
        if ( have_rows('page_elements') ) {
            while (have_rows('page_elements')) {
                the_row();
                $name = get_row_layout();
                get_template_part(
                    'acf-blocks/' . $name,
                    NULL,
                    ['section-id' => $name] // in file need use: "$args['section-id']" to setup unique section id="value"
                );

            }
        }
    ?>
<?php get_footer();
