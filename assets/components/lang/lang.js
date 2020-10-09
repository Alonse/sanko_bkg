import './lang.scss';
import $ from 'jquery';



if (innerWidth<= 1280) {
    $('.lang').on('click', function () {
        $('.lang__dropdown-link').slideToggle( "slow", function() {
            // Animation complete.
        });
        $('.lang__green-button').toggleClass('lang__green-button_active ');

        $('.lang path, .lang circle, .lang line, .lang__link').toggleClass('lang__svg_active');
    });


} else {
    $('.lang').hover( function () {
        $('.menu__phone-content').css('display', 'none');
        $('.menu__phone-content-img').removeClass('menu__phone-content-img_active');
        $('.menu__phone-header path, .menu__phone-header circle, .menu__phone-header line, .menu__phone-header__link').removeClass('.menu__svg_active');

        $('.login__dropdown-link').css('display', 'none');
        $('.login__green-button').removeClass('login__green-button_active ');
        $('.login path, .login circle, .login line, .login__link').removeClass('login__svg_active');


        $('.lang__dropdown-link').slideDown( "500", function() {});
        $('.lang__green-button').addClass('lang__green-button_active ');
        $('.lang path, .lang circle, .lang line, .lang__link').addClass('lang__svg_active');

    }, function () {

    } );
}

