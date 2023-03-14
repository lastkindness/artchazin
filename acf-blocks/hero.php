<section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="hero <?php if(get_sub_field('no_margin')): echo 'no_margin'; endif;?>"
     <?php if($hero_background = get_sub_field('hero_background')): ?>
        style="background-image: url('<?php echo $hero_background['url'];?>')">
     <?php endif ; ?>>
    <div class="container">
        <?php if($hero_slider = get_sub_field('hero_slider')): ?>
            <div class="hero__wrapper <?php if (count($hero_slider)>1) : echo ' swiper'; endif ; ?>">
                <div class="hero__slider <?php if (count($hero_slider)>1) : echo ' swiper-wrapper'; endif ; ?>">
                    <?php foreach ($hero_slider as $slide) : ?>
                        <div class="hero__slide <?php if (count($hero_slider)>1) : echo ' swiper-slide'; endif ; ?>">
                            <?php if($image = $slide['image']) : ?>
                                <img src="<?php echo $image['url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>" class="hero__slide-img">
                            <?php endif ; ?>
                            <div class="hero__slide-content">
                                <?php if($title = $slide['title']) : ?>
                                    <h1 class="hero__slide-title"><?php echo $title;?></h1>
                                <?php endif ; ?>
                                <?php if($description = $slide['description']) : ?>
                                    <p class="hero__slide-descr p3"><?php echo $description;?></p>
                                <?php endif ; ?>
                                <?php if($button = $slide['button']) : ?>
                                    <a href="<?php echo $button['url'];?>" <?php if($button['target']) : echo "target='_blank'"; endif; ?> class="hero__slide-btn btn btn_lite">
                                        <?php echo $button['title'];?>
                                    </a>
                                <?php endif ; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (count($hero_slider)>1) : ?>
                    <div class="hero__navigation swiper-navigation">
                        <div class="swiper-button-prev icon icon-arrowr"></div>
                        <div class="swiper-button-next icon icon-arrowr"></div>
                    </div>
                    <div class="hero__pagination swiper-pagination"></div>
                <?php endif ; ?>
            </div>
        <?php endif ; ?>
    </div>
</section>
