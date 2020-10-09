jQuery(document).ready(function($) {

    if ($(window).width() < 1280) {
        $( ".events__slide" ).each(function() {
            $(this).find(".events__description-text ol li").each(function( index ) {
                if(index>0){
                    $(this).css("display","none");
                }
            });
        });


        $(".add_link").click(function () {

            $(".popupTab .popup__title").text($(this).parent().find(".events__description-title").html())
            $(".popupTab .popup__content-item").append( $(this).parent().find("ol").html());
            $(".header").css("display","none");
            $(".popupTab").addClass("popup_active");
            console.log("tabs");

        });

        $(".popupTab .popup__close").click(function () {

            $(".header").css("display","flex");
            $(".popupTab .popup__title").text('')
            $(".popupTab .popup__content-item").empty();

        });

    }






});
