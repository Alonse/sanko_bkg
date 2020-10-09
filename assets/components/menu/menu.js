import './menu.scss';
import $ from 'jquery';


function hoverIn () {
    $('.lang path, .lang circle, .lang line, .lang__link').removeClass('lang__svg_active');
    $('.menu__filter-title').removeClass('menu__filter-title_active');
    $('.menu path').removeClass('menu__path_active');

    $('.lang__dropdown-link').css('display', 'none');
    $('.lang__green-button').removeClass('lang__green-button_active ');
    $('.menu__filter-header').next().children('.menu__filter-list').css('display', 'none');
    $('.menu__green-button').removeClass('menu__green-button_active ');

    $(this).next().children('.menu__filter-list').slideDown( "500", function() {
        // Animation complete.
    });
    $(this).next().children('.menu__green-button').addClass('menu__green-button_active');
    $(this).find('path').addClass('menu__path_active');
    $(this).find('.menu__filter-title').addClass('menu__filter-title_active');


    $('.login__dropdown-link').slideUp( "100", function() { });
    $('.login__green-button').removeClass('login__green-button_active ');
    $('.login path, .login circle, .login line, .login__link').removeClass('login__svg_active');

    $('.menu__phone-content').slideUp( "100", function() { });
    $('.menu__phone-content-img').removeClass('menu__phone-content-img_active');
    $('.menu__phone-header path, .menu__phone-header circle, .menu__phone-header line, .menu__phone-header__link').removeClass('.menu__svg_active');


}


$('.menu__phone-header').hover( function () {
    $('.lang__dropdown-link').css('display', 'none');
    $('.lang__green-button').removeClass('lang__green-button_active ');
    $('.lang path, .lang circle, .lang line, .lang__link').removeClass('lang__svg_active');

    $('.login__dropdown-link').css('display', 'none');
    $('.login__green-button').removeClass('login__green-button_active ');
    $('.login path, .login circle, .login line, .login__link').removeClass('login__svg_active');




    $('.menu__phone-content').slideDown( "slow", function() { });
    $('.menu__phone-content-img').addClass('menu__phone-content-img_active');
    $('.menu__phone-header path, .menu__phone-header circle, .menu__phone-header line, .menu__phone-header__link').addClass('.menu__svg_active');

}, function () {
} );


function hoverOut () {

}

$(document).on( "mousemove", function (e) {
    let container = $(".header");

    if (container.has(e.target).length === 0){

        $('.menu__phone-content').css('display', 'none');

        $('.menu__phone-content-img').removeClass('menu__phone-content-img_active');

        $('.menu__phone-header path, .menu__phone-header circle, .menu__phone-header line, .menu__phone-header__link').removeClass('.menu__svg_active');

        $('.lang path, .lang circle, .lang line, .lang__link').removeClass('lang__svg_active');
        $('.login path, .login circle, .login line, .login__link').removeClass('login__svg_active');
        $('.menu__filter-header').next().children('.menu__filter-list').css('display', 'none');

        $(this).next().children('.menu__green-button').removeClass('menu__green-button_active ');

        $('.lang__dropdown-link').css('display', 'none');
        $('.login__dropdown-link').css('display', 'none');
        $('.lang__green-button').removeClass('lang__green-button_active');
        $('.login__green-button').removeClass('login__green-button_active');

        $(this).find('path').removeClass('menu__path_active');
        $(this).find('.menu__filter-title').removeClass('menu__filter-title_active');


    }

});

$('.menu__filter-header').hover( hoverIn, hoverOut );