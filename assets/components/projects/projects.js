import './projects.scss';
import $ from 'jquery';
import Swiper from "swiper";


if (innerWidth < 1024) {

    var swiper = new Swiper('.projects__swiper-container', {

        breakpoints: {
            1023: {
                initialSlide: 1,
                spaceBetween: 20,
                slidesPerView: 'auto',
                centeredSlides: true
            },
        },
    });

}

function calcHeight(arr) {
    let heightArr =  [];
    $(arr).each(function () {
        heightArr.push(+ $(this).css('height').replace('px', ''));
    });

    let maxHeight = Math.max.apply(null, heightArr);

    $(arr).each(function () {
        $(this).css('height', `${maxHeight}px`);
    });


}

$(window).on('load', function () {
    calcHeight($('.projects__name'));
    calcHeight($('.projects__content'));
    calcHeight($('.projects__logos'));
});