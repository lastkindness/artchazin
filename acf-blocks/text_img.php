<?php if($text_img = get_sub_field('text_img')): ?>
    <section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="about">
        <div class="container">
            <div class="about__wrapper">
                <?php foreach ($text_img as $item) : ?>
                    <div class="about__item">
                        <div class="about__descr">
                            <?php if($title = $item['title']) : ?>
                                <div class="about__descr-title h1"><?php echo $title;?></div>
                            <?php endif ; ?>
                            <?php if($subtitle = $item['subtitle']) : ?>
                                <div class="about__descr-subtitle h2"><?php echo $subtitle;?></div>
                            <?php endif ; ?>
                            <div class="about__descr-divider divider"></div>
                            <?php if($text = $item['text']) : ?>
                                <div class="about__desct-text"><?php echo $text;?></div>
                            <?php endif ; ?>
                        </div>
                        <?php if($image = $item['image']) : ?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="about__img">
                        <?php endif ; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
