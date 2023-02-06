import Swiper from 'swiper/swiper-bundle.min';

export default () => {
   const swiper = new Swiper(".hero__wrapper", {
       loop: true,
       speed: 2000,
       autoplay: {
           delay: 2000,
       },
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
               mousewheel: false,
               keyboard: false,
           },
       },
    });
};
