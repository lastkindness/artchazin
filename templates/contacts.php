<?php
/*
 * Template name: Contacts Template
 */

get_header(); ?>

<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__descr">
                <?php if($title = get_the_title()) : ?>
                    <h1 class="contacts__descr-title"><?php echo $title; ?></h1>
                <?php endif;?>
                <div class="contacts__descr-divider divider"></div>
                <?php if($description = get_field('description')) : ?>
                    <p class="contacts__descr-text"><?php echo $description; ?></p>
                <?php endif;?>
            </div>
            <?php if($form_shortcode = get_field('form_shortcode')) : ?>
                <div class="callback__form">
                    <?php echo do_shortcode($form_shortcode); ?>
                </div>
            <?php endif;?>
            <div class="contacts__contacts">
                <ul class="contacts__contacts-list">
                    <?php foreach (get_field("phones", "option") as $item) {?>
                        <li class="contacts__contacts-item">
                            <a class="contacts__contacts-link" href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $item['phone']))?>">
                                <span class="icon icon-telephone"></span>
                                <span class="text"><?php echo $item["phone"]; ?></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php foreach (get_field("emails", "option") as $item) {?>
                        <li class="contacts__contacts-item">
                            <a class="contacts__contacts-link" href="mailto:<?php echo $item["email"]; ?>">
                                <span class="icon icon-mail"></span>
                                <span class="text"><?php echo $item["email"]; ?></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if($map_address = get_field("map_address", "option")) {?>
                        <li class="contacts__contacts-item">
                            <a class="contacts__contacts-link" target="_blank" href="<?php echo $map_address["url"]; ?>">
                                <span class="icon icon-mapdot"></span>
                                <span class="text"><?php echo $map_address["title"]; ?></span>
                            </a>
                        </li>
                    <?php }?>
                </ul>
                <div class="map map-container contacts__contacts-map" id="map-contact" <?php if ($global_coord = get_field('map_coords', 'options')) : echo 'data-coord="' . $global_coord . '"'; endif;?>></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
