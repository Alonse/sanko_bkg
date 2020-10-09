import './center.scss';
import $ from 'jquery';
import Swiper from "swiper";

if (innerWidth<768) {

    var swiper = new Swiper('.center__swiper-container', {
        breakpoints: {
            // 2560: {
            //     slidesPerView: 4,
            //     spaceBetween: 20,
            // },
            // 1920: {
            //     slidesPerView: 4,
            //     spaceBetween: 20,
            // },
            // 1280: {
            //     slidesPerView: 4,
            //     spaceBetween: 20,
            // },
            // 1024: {
            //     slidesPerView: 4,
            //     spaceBetween: 20,
            // },
            // 768: {
            //     initialSlide: 1,
            //     spaceBetween: 20,
            //     slidesPerView: 3,
            //     centeredSlides: true
            // },
            767: {
                initialSlide: 1,
                // spaceBetween: 20,
                slidesPerView: 'auto',
                centeredSlides: true
            },

        }
    });

}