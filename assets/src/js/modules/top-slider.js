import Swiper from 'swiper/swiper-bundle.min';

export default () => {
   const swiper = new Swiper(".top-slider .swiper", {
       slidesPerView: 1,
       spaceBetween: 10,
       loop: true,
       //speed: 1000,
       navigation: {
           nextEl: ".swiper-button-next",
           prevEl: ".swiper-button-prev",
       },
       pagination: {
           el: ".swiper-pagination",
           clickable: true,
       },
       /*autoplay: {
           delay: 2000,
       },*/
       mousewheel: true,
       keyboard: true,
       breakpoints: {
           240: {
               slidesPerView: 1,
               spaceBetween: 20,
           },
           640: {
               slidesPerView: 1,
               spaceBetween: 20,
           },
           768: {
               slidesPerView: 1,
               spaceBetween: 30,
           },
           1024: {
               slidesPerView: 2,
               spaceBetween: 32,
           },
           1280: {
               slidesPerView: 3,
               spaceBetween: 32,
           }
       },
    });
};
