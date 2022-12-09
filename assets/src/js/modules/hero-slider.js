import Swiper from 'swiper/swiper-bundle.min';

export default () => {
   const swiper = new Swiper(".hero__wrapper", {
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
