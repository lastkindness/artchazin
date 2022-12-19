'use strict';

/**
 *  Load modules
 */
import heroSlider from "./modules/hero-slider"
import topSlider from "./modules/top-slider"

import '../scss/app.scss';

$(document).ready(() => {

    heroSlider();
    topSlider();

});
