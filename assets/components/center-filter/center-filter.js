import './center-filter.scss';
import $ from 'jquery';

$('.center-filter__sub-title-inner').on('click', function () {
    $('.center-filter__sub-title-icon').toggleClass('center-filter__sub-title-icon_active');
    $('.center-filter__sub-title-icon-path').toggleClass('center-filter__sub-title-icon-path_active');
    $('.center-filter__sub-items-inner').slideToggle('slow', function () {

    });
})


if(innerWidth<768) {
    $('.center-filter__sub-item').on('click', function () {

        if ($(this).find('input').is(':checked')) {
            $(this).addClass('center-filter__sub-item_active');
        } else {
            $(this).removeClass('center-filter__sub-item_active');
        }

    })
}
