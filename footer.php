</main>
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__divider"></div>
            <div class="footer__main">
                <?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
                <a href="/" class="footer__logo">
                    <?php $logoHeader = get_field('logo_footer'.$current_lang, 'option');
                    if (!empty($logoHeader)) {
                        if (false !== stripos($logoHeader['mime_type'], 'svg')) { ?>
                            <img src="<?php echo wp_get_attachment_image_url($logoHeader['id']); ?>"
                                 class="footer__logo-picture" alt="<?php echo $logoHeader['alt']; ?>">
                        <?php } else {
                            echo wp_get_attachment_image($logoHeader['id'], 'medium');
                        }} else { ?> <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/artlogo2.svg"
                                          class="footer__logo-picture" alt="Logo Website">
                    <?php }?>
                </a>
                <?php if(has_nav_menu( 'footer' )) : ?>
                    <?php wp_nav_menu( array(
                            'container' => false,
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer__nav',
                            'items_wrap'     => '<ul id="%1$s" class="footer__menu">%3$s</ul>',
                        )
                    ); ?>
                <?php endif ; ?>
                <ul class="footer__contacts">
                    <?php if($phones = get_field('phones'.$current_lang, 'option')) : ?>
                    <?php foreach ($phones as $item) : ?>
                        <?php if($phone = $item['phone']) : ?>
                            <li class="footer__contacts-item footer__contacts-phone">
                                <a href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $phone));?>"
                                   target="_blank" class="footer__contacts-link">
                                    <span class="icon icon-telephone"></span>
                                    <span><?php echo $phone ;?></span>
                                </a>
                            </li>
                        <?php endif ; ?>
                    <?php endforeach; ?>
                    <?php endif ; ?>
                    <?php if($emails = get_field('emails'.$current_lang, 'option')) : ?>
                    <?php foreach ($emails as $item) : ?>
                        <?php if($email = $item['email']) : ?>
                            <li class="footer__contacts-item footer__contacts-phone">
                                <a href="mailto:<?php echo $email;?>"
                                   target="_blank" class="footer__contacts-link">
                                    <?php echo $email ;?>
                                </a>
                            </li>
                        <?php endif ; ?>
                    <?php endforeach; ?>
                    <?php endif ; ?>
                    <?php if($partners = get_field('partners'.$current_lang, 'option')) : ?>
                    <?php foreach ($partners as $item) : ?>
                        <?php if($partner = $item['partner']) : ?>
                            <li class="footer__contacts-item footer__contacts-phone">
                                <a href="<?php echo $partner['url']?>"
                                   target="_blank" class="footer__contacts-link">
                                    <?php echo $partner['title'] ;?>
                                </a>
                            </li>
                        <?php endif ; ?>
                    <?php endforeach; ?>
                    <?php endif ; ?>
                </ul>
            </div>
            <?php if($copyright = get_field('footer_copyright_text'.$current_lang, 'option')) : ?>
                <div class="footer__copyright"><?php echo $copyright; ?></div>
            <?php endif ; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
