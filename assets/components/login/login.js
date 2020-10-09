import './login.scss';
import $ from 'jquery';



if (innerWidth<= 1280) {
    $('.login').on('click', function () {
        $('.login__dropdown-link').slideToggle( "slow", function() {
            // Animation complete.
        });
        $('.login__green-button').toggleClass('login__green-button_active ');

        $('.login path, .login circle, .login line, .login__link').toggleClass('login__svg_active');
    });


} else {
    $('.login').hover( function () {
        $('.lang__dropdown-link').css('display', 'none');
        $('.lang__green-button').removeClass('lang__green-button_active ');
        $('.lang path, .lang circle, .lang line, .lang__link').removeClass('lang__svg_active');

        $('.menu__phone-content').css('display', 'none');
        $('.menu__phone-content-img').removeClass('menu__phone-content-img_active');
        $('.menu__phone-header path, .menu__phone-header circle, .menu__phone-header line, .menu__phone-header__link').removeClass('.menu__svg_active');



        $('.login__dropdown-link').slideDown( "500", function() { });
        $('.login__green-button').addClass('login__green-button_active ');
        $('.login path, .login circle, .login line, .login__link').addClass('login__svg_active');

    }, function () {
    } );
}

