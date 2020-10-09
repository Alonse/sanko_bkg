import './certificates.scss';
import Swiper from "swiper";


var swiper = new Swiper('.certificates__swiper-container', {
    navigation: {
        nextEl: '.certificates__swiper-button-next',
        prevEl: '.certificates__swiper-button-prev',
    },
    breakpoints: {
        999999: {
            initialSlide: 0,
            spaceBetween: 20,
            slidesPerView: 'auto',
            centeredSlides: false
        },
        767: {
            initialSlide: 1,
            spaceBetween: 20,
            slidesPerView: 'auto',
            centeredSlides: true
        },

    }
});