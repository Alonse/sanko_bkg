import './anchor.scss';
import $ from 'jquery';

function linkActive (el) {
    $(el).children('.color-button').addClass('color-button_active');
    $(el).find('.anchor__dropdown-icon-path').addClass('anchor__dropdown-icon-path_active');
    $(el).find('.anchor__dropdown-icon').addClass('anchor__dropdown-icon_active');
    $(el).find('.anchor__dropdown-number').addClass('anchor__dropdown-number_active');
    $(el).addClass('anchor__controls-panel-item_active');


}

function linkDeactive (el) {
    $(el).children('.color-button').removeClass('color-button_active');
    $(el).find('.anchor__dropdown-icon-path').removeClass('anchor__dropdown-icon-path_active');
    $(el).find('.anchor__dropdown-icon').removeClass('anchor__dropdown-icon_active');
    $(el).find('.anchor__dropdown-number').removeClass('anchor__dropdown-number_active');
    $(el).removeClass('anchor__controls-panel-item_active');
}

(function () {
    let links = $(".anchor__controls-panel-item").toArray();
    let linksContent = $(".tabs-content__dropdown-item").toArray();

    //Переход к блоку при клике на якорь
    $(links).on("click", function (event) {

        event.preventDefault()
        let index = links.indexOf(event.currentTarget);

        // находим высоту, на которой расположен блок
        let top = $(linksContent[index]).offset().top-100;

        // анимируем переход к блоку, время: 500 мс
        $('body,html').animate({scrollTop: top}, 500);
    });

//Стилизация якоря при скролле до его блока
    jQuery(window).scroll(function(){

        $(linksContent).each(function(i,el){
            let top  = $(el).offset().top-105;
            // console.log(top);

            let bottom = top +$(el).height();
            let scroll = $(window).scrollTop();
            let id = linksContent.indexOf(el);

            if( scroll > top && scroll < bottom){

                linkDeactive ($('.anchor__controls-panel-item'));
                linkActive ($(links[id]));
            }
        })
    });
}());
