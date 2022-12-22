'use strict';
/**
 *  Load modules
 */
import main from "./modules/main"
import burger from "./modules/burger"
import header from "./modules/header"
import heroSlider from "./modules/hero-slider"
import topSlider from "./modules/top-slider"

import '../scss/app.scss';

$(document).ready(() => {

    main();
    header();
    burger();
    heroSlider();
    topSlider();


});
