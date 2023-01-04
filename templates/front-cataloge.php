<?php
/*
 * Template name: Front Catalog Template
 */

get_header('front'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__wrapper">
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-home"></span></a></div>
            <div class="breadcrumbs__item"><a href="#" class="breadcrumbs__link"><span class="icon icon-smallarrow"></span></a></div>
            <div class="breadcrumbs__item active"><a href="#" class="breadcrumbs__link">Gifts</a></div>
        </div>
    </div>
</section>

<section class="main-title">
    <div class="container">
        <div class="main-title__wrapper">
            <h1 class="main-title__title">SOME GOOD TOTLE</h1>
            <div class="main-title__divider"></div>
            <div class="main-title__descr">
                <p class="p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            </div>
        </div>
    </div>
</section>

<section class="filters">
    <div class="container">
        <div class="filters__wrapper">
            <form class="filters__form">
                <div class="filters__price">
                    <p class="filters__price-text">Price:</p>
                    <label name="from" class="filters__price-text">From</label><input class="filters__price-inputone" type="text" name="from" id="from" placeholder="200$">
                    <label name="to" class="filters__price-text">To</label><input class="filters__price-inputtwo" type="text" name="to" id="to" placeholder="10 000$">
                </div>
                <div class="filters__style">
                    <label for="stule">Style:</label>
                    <select name="style" id="stile-select" form="filter__form">
                        <option value="luxury">Luxury</option>
                        <option value="no Luxury">No Luxury</option>
                        <option value="top">Top</option>
                        <option value="magic">Magic</option>
                    </select>
                </div>
                <div class="filters__paper-type">
                    <label for="paper-type">Paper Type:</label>
                    <select name="paper-type" id="paper-type" form="filter__form">
                        <option value="Pergament">Pergament</option>
                        <option value="Paper">Paper</option>
                        <option value="gold pergament">Gold Pergament</option>
                        <option value="gold paper">Gold Paper</option>
                    </select>
                </div>
                <div class="filters__collection">
                    <label for="collection">Collection:</label>
                    <select name="collection" id="collection" form="filter__form">
                        <option value="wedding gifts">Wedding Gifts</option>
                        <option value="on birthday">On Birthday</option>
                        <option value="for the anniversary">For the Anniversary</option>
                    </select>
                </div>
            </form>
            <div class="filters__sort">
                <select class="filters__sort-text">
                    <option value="low_price">Sort By: Price Lower First</option>
                    <option value="hige_price">Sort By: Price Higer First</option>
                </select>
            </div>
        </div>
    </div>
</section>

<section class="cards-grid">
    <div class="container">
        <div class="cards-grid__wrapper">
            <div class="cards-grid__grid">
                <div class="card_white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard2.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card_article">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/productcard3.png" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/delivery.jpg" alt="" class="card__img">
                    <div class="card__content">
                        <h2 class="card__title">NAME OF PRODUCT</h2>
                        <p class="card__text p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="card__price p1">999$</div>
                    </div>
                    <a href="#" class="btn card__btn">Go To Order</a>
                </div>
            </div>
            <div class="cards-grid__pagination pagination">
                <div class="pagination__arrowl"><a href="#" class="pagination__link"><span class="icon-doublearrow"></span></a></div>
                <div class="pagination__item  active"><a href="#" class="pagination__link">1</a></div>
                <div class="pagination__item"><a href="#" class="pagination__link">2</a></div>
                <div class="pagination__item"><a href="#" class="pagination__link">3</a></div>
                <div class="pagination__item"><a href="#" class="pagination__link">4</a></div>
                <div class="pagination__item"><a href="#" class="pagination__link">5</a></div>
                <div class="pagination__item"><a href="#" class="pagination__link">6</a></div>
                <div class="pagination__arrow"><a href="#" class="pagination__link"><span class="icon-doublearrow"></span></a></div>
            </div>
        </div>
    </div>
</section>


<?php get_footer('front'); ?>
