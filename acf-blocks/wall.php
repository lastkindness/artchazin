<section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="wall"
    <?php if($background = get_sub_field('background')): ?>
         style="background-image: url('<?php echo $background['url'];?>')">
    <?php endif ; ?>>
    <div class="container">
        <div class="wall__wrapper">
            <?php if($image = get_sub_field('image')) : ?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="wall__davidestar curved-img">
            <?php endif ; ?>
            <?php if($title = get_sub_field('title')) : ?>
                <p class="wall__descr">
                    <?php if($mark = get_sub_field('mark')) : ?>
                        <span class="wall__descr-mark"><?php echo $mark;?></span>
                    <?php endif ; ?>
                    <?php echo $title;?>
                </p>
            <?php endif ; ?>
        </div>
    </div>
</section>
