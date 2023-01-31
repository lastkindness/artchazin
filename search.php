<?php get_header(); ?>
<div class="search__page">
    <div class="container">
        <div class="search__page-wrapper">
            <h2 class="search__page-title">
                    <?php _e( 'Search results for: ', 'rst' ); ?>
                    <span class="search__page-description"><?php echo get_search_query(); ?></span>
                </h2>
            <ul class="search__posts">
                <?php if ( have_posts() ) : ?>
                    <?php
                    while ( have_posts() ) :
                        the_post(); ?>
                        <li class="search__post">
                            <a href="<?php the_permalink(); ?>" class="search__post-link">
                                <h3 class="search__post-title"><?php the_title(); ?></h3>
                                <p class="search__post-text"><?php
                                    $article_data = substr(get_the_excerpt(the_post()->ID), 0, 200);
                                    echo $article_data;?></p>
                            </a>
                        </li>
                    <?php
                    endwhile;

                    $args = array(
                        'show_all'     => false,
                        'end_size'     => 1,
                        'mid_size'     => 2,
                        'prev_next'    => true,
                        'prev_text'    => __('« Previous'),
                        'next_text'    => __('Next »'),
                        'add_args'     => false,
                        'add_fragment' => '',
                        'screen_reader_text' => '',
                    );

                    the_posts_pagination( $args );
                else :
                    echo '<div class="search__no-posts">
                        <h2 class="h2 search__no-posts-title small-title">
                            <span>At your request: </span><br><br><strong>"'.get_search_query().'"</strong><span> - nothing found</span></h2>
                        <h3 class="h3 search__no-posts-subtitle">Try another request!</h3>
                    </div>';
                endif;
                ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
