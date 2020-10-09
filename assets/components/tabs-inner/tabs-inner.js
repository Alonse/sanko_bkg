import './tabs-inner.scss';
import $ from 'jquery';
import 'jquery-ui/ui/widgets/tabs';

// $( function() {
//     $( "#tabs" ).tabs();
// } );





$( function() {
    let slides = $('.tabs-slider__swiper-slide').toArray();
    let tabsContent = $('.tabs__content').toArray();

    $(slides).on("click", function (event) {

        event.preventDefault()
        let index = slides.indexOf(event.currentTarget);

        
        $(this).parents('.tabs-inner').children('.tabs').children().children('.tabs__content_active').removeClass('tabs__content_active');
        $(tabsContent[index]).addClass('tabs__content_active');

    });

} );