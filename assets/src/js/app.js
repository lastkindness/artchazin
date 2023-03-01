'use strict';
import productGallerySlider from './modules/product-gallery-slider';

/**
 *  Load modules
 */
// Require jQuery (Fancybox dependency)
window.$ = window.jQuery = require('jquery');

window.noUiSlider = require('nouislider');

// Fancybox
const fancybox = require('@fancyapps/fancybox');

import main from "./modules/main"
import burger from "./modules/burger"
import header from "./modules/header"
import heroSlider from "./modules/hero-slider"
import topSlider from "./modules/top-slider"
import textLines from "./modules/text-lines"
import promotionsSlider from "./modules/promotions-slider"
import select from "./modules/select"
import tabs from "./modules/tabs"
import curvedImg from "./modules/curved-img"
import parallax from "./modules/parallax"
import productSlider from "./modules/product-slider"
import zoomlens from './modules/zoomlens'
import searchDrop from './modules/search-drop'
import noUiSliderInit from './modules/no-ui-slider'

import '../scss/app.scss';
import '../scss/admin.scss';

$(document).ready(() => {
    main();
    header();
    burger();
    textLines();
    heroSlider();
    topSlider();
    textLines();
    promotionsSlider();
    select();
    tabs();
    curvedImg();
    parallax();
    productSlider();
    zoomlens();
    productGallerySlider();
    searchDrop();
    noUiSliderInit();
});
