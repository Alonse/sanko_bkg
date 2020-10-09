import './popup.scss';
import $ from 'jquery';


const showDialog = () => {

    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.getElementById('main');
    console.log(body);
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}`;
};
const closeDialog = () => {
    const body = document.getElementById('main');
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);

}

window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});


//Открытие попапов
(function () {
    let buttons = $('.popup-link__item').toArray();
    let popups = $('.popup').toArray();

    $(buttons).on('click', function (event) {

        let index = buttons.indexOf(event.currentTarget);

        $(popups[index]).addClass('popup_active');
        showDialog();
    });

}());

//Открытие попапов из ивентов
(function () {
    let buttons = $('.event__swiper-slide').toArray();0

    $(buttons).on('click', function (event) {
        $('.popup').addClass('popup_active');
        showDialog();
    });

}());

//Закрытие попапов
(function () {
    $('.popup__close').on('click', function () {
        $('.popup').removeClass('popup_active');
        $('body').css('overflow','visible');
        closeDialog();
    });

}());

//Клик вне контента
// $(document).mouseup(function (e){
//     var div = $(".popup .container");
//     if (!div.is(e.target)
//         && div.has(e.target).length === 0) {
//         $('.popup').removeClass('popup_active');
//         $('body').css('overflow','visible');
//         closeDialog();
//     }
// });
