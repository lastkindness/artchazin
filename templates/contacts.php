<?php
/*
 * Template name: Contacts Template
 */

get_header(); ?>

<h1><?php echo get_field("test") ?></h1>
    <?php /*var_dump(get_field("phones", "option"));*/
    foreach (get_field("phones", "option") as $item) {?>
        <a href="<?php echo $item["phone"]; ?>"><?php echo $item["phone"]; ?></a>
    <?php }

    ?>

<?php get_footer(); ?>
