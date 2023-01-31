<div class="icon-search icon" id="search"></div>
<div class="header__search-drop" id="search-drop">
    <form method="get" action="<?php echo home_url(); ?>" class="header__search-form">
        <input class="header__search-input" type="search" name="s"
               placeholder="<?php echo __( 'Search', 'rst'); ?>" value="<?php echo get_search_query(); ?>">
        <button class="icon icon-search header__search-btn btn" type="submit" value="<?php _e( 'Search', 'rst' ); ?>">
        </button>
    </form>
</div>
