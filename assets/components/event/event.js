import './event.scss';
import $ from "jquery";
import Swiper from "swiper";

var swiper = new Swiper('.event__swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    spaceBetween: 20,
    breakpoints: {
        99999999: {
            slidesPerView: 3,
        },

        1023: {
            slidesPerView: 2.5,
        },

        767: {
            slidesPerView: 1,
            centeredSlides: true
        },

    }
});


//Accordion

$('.event__description-title-inner').each(function () {

    $(this).on('click', function () {
        $(this).next().slideToggle('slow', function () {

        });
        $(this).find('.event__icon-path').toggleClass('event__icon-path_active');
        $(this).find('.event__icon').toggleClass('event__icon_active');
    });
});
