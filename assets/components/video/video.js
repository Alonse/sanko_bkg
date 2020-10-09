import './video.scss';
import $ from 'jquery';


$(window).on('click', function () {

    setTimeout(function () {

        if ( $('.remodal-overlay').hasClass('remodal-is-opened')) {
            $('.index-page').addClass('index-page_blur');

        } else {
            $('.index-page').removeClass('index-page_blur');
        }
    }, 400);

})