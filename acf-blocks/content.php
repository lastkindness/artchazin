<?php if($content = get_sub_field('content')): ?>
    <section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="content">
        <div class="container">
            <div class="content__wrapper">
                <?php echo $content;?>
            </div>
        </div>
    </section>
<?php endif ; ?>
