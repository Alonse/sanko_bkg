import './feedback.scss';
import $ from 'jquery';
import Swiper from "swiper";

    var swiper = new Swiper('.feedback__swiper-container', {
        navigation: {
            nextEl: '.feedback__swiper-button-next',
            prevEl: '.feedback__swiper-button-prev',
        },
        effect: 'coverflow',
        centeredSlides: true,
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : false,
        },

        breakpoints: {
            99999999: {
                slidesPerView: 'auto',
                initialSlide: 1,
                centeredSlides: true,
                loop: true
            },

            2560: {
                slidesPerView: 'auto',
                initialSlide: 1,
                centeredSlides: true,
                loop: true

            },
            1280: {
                slidesPerView: 'auto',
            },
            1023: {
                slidesPerView: 'auto',
                initialSlide: 1,
                centeredSlides: true
            },

            767: {
                initialSlide: 1,
                slidesPerView: 'auto',
                centeredSlides: true
            },

        }
    });

    swiper.slideTo(1);
    swiper.update();


if(innerWidth>=1280) {

    $('.feedback__swiper-slide').on('click', function (e) {
        if( $(this).hasClass('swiper-slide-prev') ) {
            e.preventDefault();
            $('.feedback__swiper-button-prev').click();

        }
        if( $(this).hasClass('swiper-slide-next') ) {
            e.preventDefault();
            $('.feedback__swiper-button-next').click();

        }

    });


}