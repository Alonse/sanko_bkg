import './feedback-page.scss';
import $ from 'jquery';


//Accordion

if(innerWidth<768) {
    $('.feedback-page__name-inner').each(function () {

        $(this).on('click', function () {

            $(this).next().slideToggle('slow', function () {

            });

            $(this).find('.feedback-page__icon').toggleClass('feedback-page__icon_active');

            $(this).find('.feedback-page__icon-path').toggleClass('feedback-page__icon-path_active');
            $(this).find('.feedback-page__name').toggleClass('feedback-page__name_active');

        });
    });
}
