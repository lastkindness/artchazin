<?php if($gallery = get_sub_field('gallery')): ?>
    <section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="ketubah <?php if(get_sub_field('no_margin')): echo 'no_margin'; endif;?>">
        <div class="container">
            <div class="ketubah__wrapper">
                <?php if($title = get_sub_field('title')) : ?>
                    <div class="ketubah__descr">
                        <h1 class="ketubah__descr-title"><?php echo $title;?></h1>
                        <?php if($subtitle = get_sub_field('subtitle')) : ?>
                            <h2 class="ketubah__descr-subtitle"><?php echo $subtitle;?></h2>
                        <?php endif ; ?>
                        <div class="ketubah__descr-divider divider"></div>
                        <?php if($description = get_sub_field('description')) : ?>
                            <p class="ketubah__descr-text"><?php echo $description;?></p>
                        <?php endif ; ?>
                    </div>
                <?php endif ; ?>
                <?php if($gallery = get_sub_field('gallery')) : ?>
                    <div class="ketubah__gallery">
                        <?php foreach ($gallery as $item) : ?>
                            <?php if($image = $item['image']) : ?>
                                <a class="ketubah__gallery-item <?php if ($item['is_big']) : echo ' big'; endif; ?>" href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ketubah__gallery-img">
                                </a>
                            <?php endif ; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif ; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
