import './burger.scss';
import $ from 'jquery';

$('.burger').on('click', function () {
    $('.burger__line-up').toggleClass('burger__line-up_active');
    $('.burger__line-middle').toggleClass('burger__line-middle_active');
    $('.burger__line-bottom').toggleClass('burger__line-bottom_active');


});