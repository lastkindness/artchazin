<?php if($top_slider = get_sub_field('top_slider')): ?>
    <section class="top-slider">
        <div class="container">
            <div class="top-slider__wrapper <?php if (count($top_slider)>3) : echo ' swiper'; endif ; ?>">
                <?php if($top_slider_title = get_sub_field('top_slider_title')): ?>
                    <h1 class="top-slider__title"><?php echo $top_slider_title;?></h1>
                <?php endif ; ?>
                <?php if($top_slider_description = get_sub_field('top_slider_description')): ?>
                    <div class="top-slider__divider"></div>
                    <div class="top-slider__descr">
                        <p class="p3"><?php echo $top_slider_description;?></p>
                    </div>
                <?php endif ; ?>
                <div class="top-slider__cardwrap <?php if (count($top_slider)>3) : echo ' swiper-wrapper'; endif ; ?>">
                    <?php foreach ($top_slider as $slide) : ?>
                        <div class="top-slider__card card <?php if (count($top_slider)>3) : echo ' swiper-slide'; endif ; ?>">
                            <?php if($image = $slide['image']) : ?>
                                <img src="<?php echo $image['url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>" class="top-slider__card-img card__img">
                            <?php endif ; ?>
                            <div class="card__content top-slider__card-content">
                                <?php if($title = $slide['title']) : ?>
                                    <h2 class="top-slider__card-title card__title"><?php echo $title;?></h2>
                                <?php endif ; ?>
                                <?php if($description = $slide['description']) : ?>
                                    <div class="card__text p3 top-slider__card-text"><?php echo $description;?></div>
                                <?php endif ; ?>
                                <?php if($price = $slide['price']) : ?>
                                    <div class="top-slider__card-price card__price p1"><?php echo $price;?></div>
                                <?php endif ; ?>
                            </div>
                            <?php if($link_to_product = $slide['link_to_product']) : ?>
                                <a href="#" class="btn card__btn top-slider__card-btn"><?php echo $link_to_product;?></a>
                            <?php endif ; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (count($top_slider)>3) : ?>
                    <div class="top-slider__navigation swiper-navigation">
                        <div class="swiper-button-prev icon icon-arrowr"></div>
                        <div class="swiper-button-next icon icon-arrowr"></div>
                    </div>
                    <div class="top-slider__pagination swiper-pagination"></div>
                <?php endif ; ?>
            </div>
        </div>
    </section>
<?php endif ; ?>
