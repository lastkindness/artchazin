<?php if($main_title = get_sub_field('main_title')): ?>
    <section <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="main-title">
        <div class="container">
            <div class="main-title__wrapper">
                <h1 class="main-title__title"><?php echo $main_title;?></h1>
            </div>
        </div>
    </section>
<?php endif ; ?>
