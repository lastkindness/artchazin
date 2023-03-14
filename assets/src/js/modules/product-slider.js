import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: "auto",
        direction: "horizontal",
        watchSlidesProgress: true,
        freeMode: true,
        allowTouchMove: true,
        preventClicks: true,
        keyboardControl: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        mousewheel: {
            enable: true
        },
        keyboard: {
            enabled: true
        },
        breakpoints: {
            768: {
                direction: "vertical",
            }
        }
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        thumbs: {
            swiper: swiper,
        },
        mousewheel: {
            enable: true
        },
        keyboard: {
            enabled: true
        },
    });
};
