import './front.scss';
import $ from 'jquery';
import Swiper from "swiper";


var swiper = new Swiper('.front__swiper-container', {
    autoplay: {
        delay: 500,
    },
    speed: 2000,
    loop: true,

    breakpoints: {
        767: {

            slidesPerView: '3',
            initialSlide: 1,
            centeredSlides: true,
        },
        1023: {
            slidesPerView: '4',
            centeredSlides: false,
        },

        1279: {
            slidesPerView: '5',
        },

        2560: {
            slidesPerView: '6',
        },

        99999999: {
            slidesPerView: '6',
        },

    }
});

(function () {
    let currentX = '';
    let currentY = '';
    let movementConstant = .015;
    $(document).mousemove(function(e) {
        if(currentX == '') currentX = e.pageX;
        let xdiff = e.pageX - currentX;
        currentX = e.pageX;
        if(currentY == '') currentY = e.pageY;
        let ydiff = e.pageY - currentY;
        currentY = e.pageY;
        $('.front__bgd').each(function(i, el) {
            let movement = (i + 1) * (xdiff * movementConstant);
            let movementy = (i + 1) * (ydiff * movementConstant);
            let newX = $(el).position().left - movement;
            let newY = $(el).position().top - movementy;
            $(el).css('left', newX + 'px');
        });
    });
}());

