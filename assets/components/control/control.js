import './control.scss';
import $ from 'jquery';




// $(window).on('scroll', function () {
//     if (innerWidth>=1280) {
//         if (scrollY >= $('.directions').offset().top + 800) {
//             $('.control').addClass('control_active');
//             $('.tabs__left-bar').addClass('tabs__left-bar_active');
//
//         } else {
//             $('.control').removeClass('control_active');
//             $('.tabs__left-bar').removeClass('tabs__left-bar_active');
//         }
//     }
// })



window.addEventListener('load', function () {
    let itemsAmount =  document.querySelector('.control').querySelectorAll('.control__list-item');

    Array.from(itemsAmount).forEach(function (el) {
        el.style.width = `calc(100%/ ${itemsAmount.length}`

    })

});


