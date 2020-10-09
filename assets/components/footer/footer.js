import './footer.scss';
import $ from 'jquery';

//Footer menu click
if(innerWidth<768) {
    $( ".footer__filter-header" ).each(function() {
        $( this ).on('click', function () {
            $(this).next().slideToggle( "slow", function() {
                // Animation complete.
            });
            $(this).children('.footer__filter-title').toggleClass('footer__filter-title_active');
            $(this).find('.footer__path').toggleClass('footer__path_active');
            $(this).find('.footer__filter-icon').toggleClass('footer__filter-icon_active');
        })
    });
}
