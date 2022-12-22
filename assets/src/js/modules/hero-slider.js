import Swiper from 'swiper/swiper-bundle.min';

export default () => {
   const swiper = new Swiper(".hero__wrapper", {
       cssMode: true,
       navigation: {
           nextEl: ".swiper-button-next",
           prevEl: ".swiper-button-prev",
       },
       pagination: {
           el: ".swiper-pagination",
       },
       mousewheel: true,
       keyboard: true,
       breakpoints: {
           1025: {

           },
       },
    });
};
