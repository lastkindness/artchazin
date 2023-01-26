import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    const swiper = new Swiper(".product-gallery-slider__wrapper", {
        cssMode: true,
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
