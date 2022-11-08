<?php
/*
 * Template name: Start Template
 */

get_header(); ?>

<section class="start-section">
    <div class="container">
        <div class="start-section__wrapper">
            <?php if($logo = get_field('logo','option')) : ?>
                <img class="start-section__logo" src="<?php echo $logo['url'] ; ?>" alt="<?php echo $logo['alt'] ; ?>">
            <?php endif ; ?>
            <?php if($button = get_field('button')) : ?>
                <a class="start-section__button btn" href="<?php echo $button['url'] ; ?>" <?php if($button['target']) :
                    echo 'target="_blank"'; endif ; ?>>
                    <?php echo $button['title'] ; ?>
                </a>
            <?php endif ; ?>
            <?php if($title = get_field('title')) : ?>
                <h3 class="start-section__title"><?php echo $title ; ?></h3>
            <?php endif ; ?>
            <?php if($links = get_field('links')) : ?>
                <ul class="start-section__links">
                    <?php foreach ($links as $link) : ?>
                        <?php if($btn = $link['link']) : ?>
                            <li class="start-section__li">
                                <a href="<?php echo $btn['url']?>" class="start-section__link" <?php if($btn['target']) :?>target="_blank" <?php endif ; ?>><?php echo $btn['title']?></a>
                            </li>
                        <?php else : ?>
                            <li class="start-section__li">
                                <span class="start-section__link"><?php echo $link['text']?></span>
                            </li>
                        <?php endif ; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif ; ?>
            <?php if($email = get_field('email','option')) : ?>
                <div class="start-section__info">
                    <span class="heading">Email:</span>
                    <a class="value" target="_blank" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
            <?php endif ; ?>
            <?php if(!empty(get_the_content())) : ?>
                <div class="start-section__content">
                    <?php the_content();?>
                </div>
            <?php endif ; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
