<?php if($main_subtitle = get_sub_field('main_subtitle')): ?>
    <section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="main-subtitle">
        <div class="container">
            <div class="main-subtitle__wrapper">
                <h2 class="main-subtitle__title"><?php echo $main_subtitle;?></h2>
            </div>
        </div>
    </section>
<?php endif ; ?>
