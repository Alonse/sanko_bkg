import './tabs-content.scss';
import $ from 'jquery';
import Swiper from "swiper";


//Accordion
$('.tabs-content__dropdown-title-inner').each(function () {

    $(this).on('click', function () {

        $(this).next().slideToggle('slow', function () {

        });
        $(this).children('.tabs-content .color-button').toggleClass('color-button_active');
        $(this).find('.tabs-content__dropdown-icon-path').toggleClass('tabs-content__dropdown-icon-path_active');
        $(this).find('.tabs-content__dropdown-icon').toggleClass('tabs-content__dropdown-icon_active');
        $(this).find('.tabs-content__dropdown-number').toggleClass('tabs-content__dropdown-number_active');


        let swiper = new Swiper( '.tabs-content__swiper-container', {
            pagination: {
                el: '.tabs-content__swiper-pagination',
                type: 'bullets',
                clickable: true

            },
            navigation: {
                nextEl: '.tabs-content__swiper-button-next',
                prevEl: '.tabs-content__swiper-button-prev',
            },
            slidesPerView: 1,

        });

    });


});


//Accordion inside accordion
$('.tabs-content__accordion-title').each(function () {

    $(this).on('click', function () {

        $(this).next().slideToggle('slow', function () {

        });
        $(this).toggleClass('tabs-content__accordion-title_active');
        $(this).find('svg').toggleClass('tabs-content__dropdown-icon_active');

    });
});