<section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>
    class="image-with-text">
    <div class="container">
        <div class="image-with-text__wrapper" <?php if($image = get_sub_field('image_with_text_image')):  ?> style="background-image: url('<?php echo $image['url'];?>)"
        <?php endif ; ?>>
            <?php if($text = get_sub_field('image_with_text_text')): ?>
                <div class="image-with-text__text">
                    <?php echo $text;?>
                </div>
            <?php endif ; ?>
        </div>
    </div>
</section>
