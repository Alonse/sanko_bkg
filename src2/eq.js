jQuery(function($){

    //Check empty controls
    (function () {
        if ($('.control__list').html().trim() === ''){
            $(".control").css("display","none")

        }

    }());


    //Active first tabs__left-bar item
    $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item").removeClass("anchor__controls-panel-item_active");
    $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item:first-child").addClass("anchor__controls-panel-item_active");
    $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item:first-child .color-button").addClass("color-button_active");


    //Active first item of second-bar
    $(".control__list-item").removeClass("control__list-item_active");
    $(".control__list-item:first-child").addClass("control__list-item_active");



    //Scroll and active
    $(window).on('scroll', function () {
        if (innerWidth>=1280) {
            if (scrollY >= $('.directions').offset().top + 600) {

                $('.control').addClass('control_active');
                $('.tabs__left-bar').addClass('tabs__left-bar_active');

            } else {
                $('.control').removeClass('control_active');
                $('.tabs__left-bar').removeClass('tabs__left-bar_active');
            }
        }

    })


    //Scroll to form
    $( ".anchor__form-link" ).on( "click", function() {
        $("html, body").animate({ scrollTop: $(".complex-tab .tabs__content_active .form").offset().top - 120 }, 600);
    });

    //Scroll to tab
    (function () {
        let links = $('.control__list-item').toArray();
        let sliderLinks = $('.tabs-slider__swiper-slide').toArray();

        $(links).each(function () {

            $(this).on('click', function (event) {

                $(links).removeClass('control__list-item_active');
                $(this).addClass('control__list-item_active');

                let index = links.indexOf(event.currentTarget);
                $(sliderLinks[index]).click();
                $("html, body").animate({scrollTop: $('.tabs__content_active').offset().top - 80 },"slow");

                $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item").removeClass("anchor__controls-panel-item_active");
                $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item:first-child").addClass("anchor__controls-panel-item_active");
                $(".complex-tab .tabs__content_active .tabs__left-bar .anchor__controls-panel-item:first-child .color-button").addClass("color-button_active");

            })

        })

    }());

});