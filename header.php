<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<header class="header <?php if(is_front_page()) : echo ' header_transparent'; endif; ?>" id="header">
    <div class="header__head">
        <div class="container">
            <div class="header__head-wrapper">
                <?php if(has_nav_menu( 'main' )) : ?>
                    <?php wp_nav_menu( array(
                            'container' => false,
                            'theme_location' => 'main',
                            'menu_class'     => 'header__head-nav',
                            'items_wrap'     => '<ul id="%1$s" class="header__head-list">%3$s</ul>',
                        )
                    ); endif ?>
                <?php if($phones = get_field('phones'.$current_lang, 'option')) : ?>
                    <div class="header__head-phone p3-italic">
                        <?php $i = 0; foreach ($phones as $item) : ?>
                            <?php if($i==0) : ?>
                                <a href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $item['phone']))?>" target="_blank" class="phone">
                                    <span class="icon icon-telephone"></span>
                                    <span><?php echo $item['phone'] ;?></span>
                                </a>
                            <?php endif; ?>
                        <?php $i++; endforeach; ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="header__menu">
        <div class="container">
            <div class="header__menu-wrapper">
                <a href="/<?php echo $current_lang; ?>" class="header__menu-logo">
                    <?php if(is_front_page()) { $logoHeaderHome = get_field('logo_header_home'.$current_lang, 'option');
                        } else { $logoHeader = get_field('logo_header'.$current_lang, 'option');}
                        $logoHeaderScroll = get_field('logo_header_scroll'.$current_lang, 'option');
                        if (!empty($logoHeader)) {
                        if (false !== stripos($logoHeader['mime_type'], 'svg')) { ?>
                            <img src="<?php echo wp_get_attachment_image_url($logoHeader['id']); ?>"
                                 class="logo" alt="<?php echo $logoHeader['alt']; ?>">
                        <?php } else {
                            echo wp_get_attachment_image($logoHeader['id'], 'medium');
                        }} else { ?> <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/artlogo3.svg"
                             class="logo" alt="Logo Website">
                        <?php }

                        if (!empty($logoHeaderScroll)) {
                            if (false !== stripos($logoHeaderScroll['mime_type'], 'svg')) { ?>
                                <img src="<?php echo wp_get_attachment_image_url($logoHeaderScroll['id']); ?>"
                                     class="logo-scroll" alt="<?php echo $logoHeaderScroll['alt']; ?>">
                            <?php } else {
                                echo wp_get_attachment_image($logoHeaderScroll['id'], 'medium');
                            }} else { ?> <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/scroll-logo.svg"
                                              class="logo-scroll" alt="Logo Website">
                        <?php }
                    ?>
                </a>
                <div class="header__menu-nav">
                    <div class="header__menu-items">
                        <?php if(has_nav_menu( 'privacy' )) : ?>
                            <?php wp_nav_menu( array(
                                    'container' => false,
                                    'theme_location' => 'privacy',
                                    'menu_class'     => 'header__menu-nav',
                                    'items_wrap'     => '<ul id="%1$s" class="header__menu-list">%3$s</ul>',
                                )
                            ); ?>
                        <?endif ; ?>
                        <div class="header__menu-lang header__menu-lang_mobile">
                            <?php pll_the_languages( array( "dropdown"=>0, "show_flags" => 1, "show_names" => 0 ) ); ?>
                        </div>
                    </div>
                    <div class="header__menu-dot"></div>
                    <div class="header__search">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="burger header__burger"><span></span><span></span><span></span></div>
                </div>
                <div class="header__menu-lang">
                    <?php pll_the_languages( array( "dropdown"=>0, "show_flags" => 1, "show_names" => 0 ) ); ?>
                </div>
            </div>
            <div class="header__menu-line"></div>
        </div>
    </div>
</header>
<main class="main">
<?php # TODO: code here ?>
