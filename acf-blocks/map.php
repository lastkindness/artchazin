<section <?php if(get_sub_field('animation')): echo 'data-aos="fade-up"'; endif;?> <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?> class="map <?php if(get_sub_field('no_margin')): echo 'no_margin'; endif;?>">
    <div class="container">
        <div class="map__wrapper">
            <h2 class="map__title"></h2>
            <div class="map-container" id="map<?php if($id):echo $id; endif;?>"
                <?php if($coord = get_sub_field('coord')): echo 'data-coord="' . $coord . '"';
                      elseif ($global_coord = get_field('map_coords', 'options')) : echo 'data-coord="' . $global_coord . '"'; endif;?>>
            </div>
        </div>
    </div>
</section>
