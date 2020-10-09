import './header.scss';
import $ from 'jquery';

$( ".header__filter-header" ).each(function() {


    $( this ).on('click', function () {
        $(this).next().slideToggle( "slow", function() {
            // Animation complete.
        });
        $(this).children('.header__filter-title').toggleClass('header__filter-title_active');
        $(this).find('.header__path').toggleClass('header__path_active');
        $(this).find('.header__filter-icon').toggleClass('header__filter-icon_active');
    });
});


//Choose country


$(".header__soc-inner-item:nth-child(1)").addClass("phone-href");

$.ajax({
    url: "https://get.geojs.io/v1/ip/geo.js",
    dataType: "jsonp",
    jsonpCallback:"geoip",
    success: function(data) {
        let geo = data.country_code;
        if(geo=="RU"){
            $(".phone-href").attr("href", "tel:+79654348629")
        }
        else{
            $(".phone-href").attr("href", "tel:+375447541518")
        }
    }
});


//Уменьшение хедера на скролл

$(window).on('scroll', function () {

    if (scrollY>0   ) {
        $('.header').addClass('header__active');
    } else {
        $('.header').removeClass('header__active');
    }



    if(innerWidth>=1024) {
        if (scrollY>0) {
            $('.header__inner').addClass('header__inner_scroll');
            $('.header__logo').addClass('header__logo_scroll');
            $('.menu__filter-body').addClass('menu__filter-body_scroll');
            $('.lang__dropdown-inner').addClass('lang__dropdown-inner_scroll');
            $('.login__dropdown-inner').addClass('login__dropdown-inner_scroll');
        } else {
            $('.header__inner').removeClass('header__inner_scroll');
            $('.header__logo').removeClass('header__logo_scroll');
            $('.menu__filter-body').removeClass('menu__filter-body_scroll');
            $('.login__dropdown-inner').removeClass('login__dropdown-inner_scroll');
        }
    }

})

$('.burger').on('click', function () {
    $('.header__dropdown-menu').slideToggle( "slow", function() {});
    $('.header__dropdown-menu').toggleClass("header__dropdown-menu_active");
    $('.main').toggleClass("blur");


    // $('.main').css('position', 'fixed');

})
