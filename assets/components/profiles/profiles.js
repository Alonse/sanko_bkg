import './profiles.scss';
import $ from 'jquery';
import Swiper from "swiper";

if (innerWidth<768) {

    var swiper = new Swiper('.profiles__swiper-container', {
        breakpoints: {
            767: {
                initialSlide: 1,
                // spaceBetween: 20,
                slidesPerView: 'auto',
                centeredSlides: true
            },

        }
    });

}

if (innerWidth>=1280) {
    $('.profiles__swiper-slide').hover( function () {

        $(this).find('.profiles__hover-block').addClass('profiles__hover-block_active')


    }, function () {
        $(this).find('.profiles__hover-block').removeClass('profiles__hover-block_active')
    } );
}
