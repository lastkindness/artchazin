<section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="banner <?php if(get_sub_field('no_margin')): echo 'no_margin'; endif;?>"
    <?php if($background = get_sub_field('background')): ?>
         style="background-image: url('<?php echo $background['url'];?>')">
    <?php endif ; ?>
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__descr ">
                <?php if($title = get_sub_field('title')) : ?>
                    <h1 class="banner__descr-title"><?php echo $title;?></h1>
                <?php endif ; ?>
                <?php if($description = get_sub_field('description')) : ?>
                    <p class="banner__descr-descr p2"><?php echo $description;?></p>
                <?php endif ; ?>
                <?php if($btn = get_sub_field('btn')) : ?>
                    <div class="banner__descr-readmore">
                        <a href="<?php echo $btn['url'];?>" class="banner__descr-readmore-link">
                            <span><?php echo $btn['title'];?></span><span class="icon icon-arrowr"></span>
                        </a>
                    </div>
                <?php endif ; ?>
            </div>
            <?php if($image = get_sub_field('image')) : ?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="banner__img">
            <?php endif ; ?>
            <?php if($list = get_sub_field('list')) : ?>
                <div class="banner__box">
                    <?php foreach ($list as $item) : ?>
                        <div class="banner__box-item">
                            <?php if($icon = $item['icon']) : ?>
                                <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" class="banner__box-item-img">
                            <?php endif ; ?>
                            <div class="banner__box-item-descr">
                                <?php if($title = $item['title']) : ?>
                                    <h6 class="banner__box-item-descr-title"><?php echo $title;?></h6>
                                <?php endif ; ?>
                                <?php if($text = $item['text']) : ?>
                                    <p class="banner__box-item-descr-text p5"><?php echo $text;?></p>
                                <?php endif ; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif ; ?>
        </div>
    </div>
</section>
