import './video-popup.scss';
import $ from 'jquery';
import 'remodal';

$(document).on('closing', '.remodal', function (e) {
    $(this).find('.youtube-video').each(function(index) {
        $(this).attr('src', $(this).attr('src'));
        return false;
    });
});



