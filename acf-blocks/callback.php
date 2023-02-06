<section class="callback parallax"
    <?php if($background = get_sub_field('background')): ?>
         style="background-image: url('<?php echo $background['url'];?>')">
    <?php endif ; ?>
    <div class="container">
        <div class="callback__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <div class="callback__title h1"><?php echo $title; ?></div>
            <?php endif ; ?>
            <?php if($form_shortcode = get_sub_field('form_shortcode')) : ?>
                <div class="callback__form">
                    <?php echo do_shortcode($form_shortcode); ?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
