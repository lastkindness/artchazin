import Swiper from 'swiper/swiper-bundle.min';

export default () => {
   const swiper = new Swiper(".top-slider__wrapper", {
       slidesPerView: 3,
       spaceBetween: 32,
       navigation: {
           nextEl: ".swiper-button-next",
           prevEl: ".swiper-button-prev",
       },
       pagination: {
           el: ".swiper-pagination",
           clickable: true,
       },
    });
};
