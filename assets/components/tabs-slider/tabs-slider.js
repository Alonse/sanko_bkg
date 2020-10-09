import './tabs-slider.scss';
import $ from 'jquery';
import Swiper from "swiper";

var swiper = new Swiper('.tabs-slider__swiper-container', {
    navigation: {
        nextEl: '.tabs-slider__swiper-button-next',
        prevEl: '.tabs-slider__swiper-button-prev',
    },
    pagination: {
        el: '.tabs-slider__swiper-pagination',
        type: 'fraction',
    },
    breakpoints: {
        767: {
            initialSlide: 1,
            spaceBetween: 0,
            slidesPerView: 'auto',
            centeredSlides: true
        },
        1024: {
            initialSlide: 0,
            spaceBetween: 20,
            slidesPerView: 3,
            centeredSlides: false
        },
        999999: {
            slidesPerView: 4,
            spaceBetween: 20,
        }

    }
});


if(innerWidth>=768) {
    $('.tabs-slider__swiper-slide').each(function () {

        $(this).on('click', function (event) {

            let links = $('.control__list-item').toArray();
            let sliderLinks = $('.tabs-slider__swiper-slide').toArray();
            let index = sliderLinks.indexOf(event.currentTarget);

            $(links).removeClass('control__list-item_active');
            $(links[index]).addClass('control__list-item_active');


            $('.tabs-slider__slide-button').removeClass('tabs-slider__slide-button_active');
            $('.tabs-slider__slide-button-2').removeClass('tabs-slider__slide-button_active');

            $(".swiper-slide").removeClass("ui-tabs-active");

            $(this).addClass("ui-tabs-active");

            if($(this).hasClass('ui-tabs-active')) {

                $(this).find('.tabs-slider__slide-button').addClass('tabs-slider__slide-button_active');

                setTimeout(function () {
                    $('.ui-tabs-active').find('.tabs-slider__slide-button-2').addClass('tabs-slider__slide-button_active');
                }, 250);

            }


        });
    });

} else  {
    $('.tabs-slider__swiper-slide').each(function () {


        $(this).on('click', function (event) {

            let links = $('.control__list-item').toArray();
            let sliderLinks = $('.tabs-slider__swiper-slide').toArray();
            let index = sliderLinks.indexOf(event.currentTarget);

            $(links).removeClass('control__list-item_active');
            $(links[index]).addClass('control__list-item_active');


            $('.tabs-slider__slide-button').removeClass('tabs-slider__slide-button_active');
            $('.tabs-slider__slide-button-2').removeClass('tabs-slider__slide-button_active');

            $(".swiper-slide").removeClass("ui-tabs-active");

            $(this).addClass("ui-tabs-active");

            if($(this).hasClass('ui-tabs-active')) {

                $(this).find('.tabs-slider__slide-button').addClass('tabs-slider__slide-button_active');

                setTimeout(function () {
                    $('.ui-tabs-active').find('.tabs-slider__slide-button-2').addClass('tabs-slider__slide-button_active');
                }, 250);

            }


        });
    });
}

$(window).on('load', function () {

    $(".swiper-slide-active").addClass("ui-tabs-active");

    setTimeout(function () {

        $('.ui-tabs-active').find('.tabs-slider__slide-button').addClass('tabs-slider__slide-button_active');
        $('.ui-tabs-active').find('.tabs-slider__slide-button-2').addClass('tabs-slider__slide-button_active');
    }, 0);


    //Появление кнопок переключения слайдера, если слайдов больше 4

    if(innerWidth>=1024) {

        let slider = document.querySelectorAll('.tabs-slider');

        slider.forEach(function (el) {
            let sliderLength = el.querySelectorAll('.tabs-slider__swiper-slide').length;
            if( sliderLength > 4) {
                el.querySelector(".tabs-slider__navigation").style.display = 'flex';
            }
        })
    }

})
