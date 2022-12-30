<?php
/*
 * Template name: Front Contacts Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Contact Us</a></div>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__descr">
                <h1 class="contacts__descr-title">Art Chazin Contacts</h1>
                <div class="contacts__descr-divider"></div>
                <p class="contacts__descr-text">We invest in providing gracious service, to every customer who contacts us, for every question or comment we are available to reply according. If you have any questions regarding the ordering process or anything else, please don't hesitate to contact us, our customer service team will be there to respond within 24 hours of contact (not including Shabbat and holidays).
                    Our customer service provides response in 6 languages: English, Hebrew, French, Russian, Yiddish and Flemish.
                    Choose the way most comfortable to you to contact us. </p>
            </div>
            <form class="contacts__form" action="/my-handling-form-page" method="post">
                <input class="contacts__form-name" type="text" id="name" name="user_name" placeholder="Name">
                <input class="contacts__form-phone" type="email" id="mail" name="user_email" placeholder="Phone">
                <textarea class="callback__form-comment" id="msg" name="user_message" placeholder="Comment"></textarea>
                <input class="contacts__form-button btn" type="button" value="Call Me">
            </form>
            <div class="contacts__contacts">
                <ul class="contacts__contacts-list">
                    <li class="contacts__contacts-item"><a href="#" class="contacts__contacts-link"><span class="icon icon-telephone"></span><span class="text">+97258-4797927</span></a></li>
                    <li class="contacts__contacts-item"><a href="#" class="contacts__contacts-link"><span class="icon icon-mail"></span><span class="text">artchazin@gmail.com</span></a></li>
                    <li class="contacts__contacts-item"><a href="#" class="contacts__contacts-link"><span class="icon icon-mapdot"></span><span class="text">Henrietta Szold St 4</span></a></li>
                </ul>
                <iframe class="contacts__contacts-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.57768816285!2d35.2350254!3d31.7733654!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e75b6d09f15d4a4!2z0KHQuNGC0Lgg0L7RhCDQlNGN0LLQuNC0!5e0!3m2!1sru!2sua!4v1672058670702!5m2!1sru!2sua" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>



<?php get_footer('front'); ?>
