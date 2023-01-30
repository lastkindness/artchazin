<?php
/*
 * Template name: Front Payment And Delivery Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Payment And Delivery</a></div>
        </div>
    </div>
</section>

<section class="payment">
    <div class="container">
        <div class="payment__wrapper">
            <div class="payment__title h1">Payment And Delivery</div>
            <div class="payment__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg')">
<!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="payment__img-img">-->
                <p class="payment__img-text">FREE SHIPPING for your orders</p>
                <p class="payment__img-text biggest">Our terms of payment and delivery are the most favorable and pleasant.</p>
                <p class="payment__img-text">Do you want to make sure?</p>
            </div>
            <div class="payment__subtitle h3">PAYMENT OPTIONS Pay for the order in the most convenient way for you:</div>
            <div class="payment__thumb">
                <div class="payment__thumb-item">
                    <div class="payment__thumb-title h3">To a bank card
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/icons/bankcard.svg" alt="" class="payment__thumb-img">
                    </div>
                    <p class="payment__thumb-text">A popular and fast way to pay online through the Privat 24 application, Liqpay or using a network of terminals.</p>
                </div>
                <div class="payment__thumb-item">
                    <div class="payment__thumb-title h3">Cash on delivery
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/icons/cash.svg" alt="" class="payment__thumb-img">
                    </div>
                    <p class="payment__thumb-text">You can pay for the order upon receipt by our representative in your city after checking the order.</p>
                </div>
                <div class="payment__thumb-item">
                    <div class="payment__thumb-title h3">Visa / Mastercard
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/icons/mastercard.svg" alt="" class="payment__thumb-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/icons/visa.svg" alt="" class="payment__thumb-img">
                    </div>
                    <p class="payment__thumb-text">A popular and fast way to pay online through the Privat 24 application, Liqpay or using a network of terminals.</p>
                </div>
                <div class="payment__thumb-item">
                    <div class="payment__thumb-title h3">C.O.D
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/icons/cod.svg" alt="" class="payment__thumb-img">
                    </div>
                    <p class="payment__thumb-text">Payment is made in the department of Nova Poshta, % for sending money according to the tariffs is paid by the customer.</p>
                </div>
            </div>
            <div class="payment__descr">
                <div class="payment__descr-title h3">PRODUCTION AND DELIVERY TERMS</div>
                <p class="payment__descr-text">You will receive your order within 1-4 working days from the moment the order is confirmed by our manager, provided that the ordered products are in stock with the desired characteristics (color, size, metal sample, stones).</p>
                <p class="payment__descr-text">For the production of products to order, deadlines are set, which depend on the complexity of production, the availability of materials and taking into account holidays. The average term is 14-21 business days.</p>
            </div>
            <div class="payment__descr">
                <div class="payment__descr-title h3">RETURN TERMS AND AMOUNT OF REFUND</div>
                <p class="payment__descr-text">We carefully select the goods on our website and discuss all the nuances, so we are sure that you will like our products. If you decide to return them, it is possible. But there are conditions.</p>
                <p class="payment__descr-text">You can return the ordered product, which was in stock, if it did not suit you at the time of receipt for some reason, by paying 200 UAH. for return shipping to our representative.</p>
                <p class="payment__descr-text">If the decision to return was made within 1-3 days after receipt or delivery, you must contact us to clarify further actions. After returning to the warehouse, the goods will be checked, if it is successful, we will refund the cost of the order, excluding shipping costs.</p>
                <p class="payment__descr-text">If you decide to return the product after using it longer than 3 days from the date of receipt (excluding holidays and weekends), we will not be able to return it to the manufacturer - according to Ukrainian law, the return of jewelry is prohibited.</p>
                <p class="payment__descr-text">If you are returning a product that was custom-made for you, we will refund the amount minus the prepayment and shipping costs.</p>
                <p class="payment__descr-text">The product can only be returned in its original condition - intact, without scratches and chips, with certificates and tags.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
