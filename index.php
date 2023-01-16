<?php get_header();?>
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
