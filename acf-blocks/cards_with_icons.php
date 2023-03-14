<?php if($cards_with_icons = get_sub_field('cards_with_icons')): ?>
    <section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="cards-with-icons">
        <div class="container">
            <div class="cards-with-icons__wrapper">
                <?php foreach ($cards_with_icons as $item) : ?>
                    <div class="cards-with-icons__item">
                        <div class="cards-with-icons__title h3">
                            <?php if($title = $item['title']) : ?>
                                <span><?php echo $title;?></span>
                            <?php endif ; ?>
                            <?php if($image = $item['image']) : ?>
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="cards-with-icons__img">
                            <?php endif ; ?>
                        </div>
                        <?php if($text = $item['text']) : ?>
                            <p class="cards-with-icons__text"><?php echo $text;?></p>
                        <?php endif ; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
