jQuery(function ($) {
            
    function parseUrl(name) {
        var s = window.location.search;
        s = s.match(new RegExp(name + '=([^&=]+)'));
        return s ? s[1] : false;
    }


        if(parseUrl('params') == '') {
            let cont = $('.tabs__content');
            cont.each(function (i, item) {
                if($(item).attr('id') == 0) {
                    $(item).addClass('tabs__content_active');
                }
            })
        } else {
            $('.tabs-complex__button').each(function () {
                if(parseUrl('param') === $(this).data('param')){
                    $(".ui-tabs-tab").removeClass("ui-tabs-active ui-state-active");
                    $(this).parent().addClass("ui-tabs-active ui-state-active");
                    if ($(this).attr('id') == "for-you"){
                        $( ".tabs-complex__roller").addClass('tabs-complex__roller_active');
                    }
                    else{
                        $( ".tabs-complex__roller").removeClass('tabs-complex__roller_active');
                    }
                }

                })

                $(".tabs-slider__swiper-slide").each(function () {
                

                if(parseUrl('params') === $(this).data('params')){

                    let dad = $(this).parents(".complex-tab");
                        
                    if ( dad.css('display') == 'block')
                    {

                        let tabs = dad.attr("id");
                        let tabsContent = $(dad).find('.tabs__content').toArray();
                        let index = $(this).index();

                    $(this).addClass("swiper-slide-active ui-tabs-active");
                    $(this).parents('.tabs-inner').children('.tabs').children().children('.tab__content_active').removeClass('tabs__content_active');
                    $(tabsContent[index]).addClass('tabs__content_active');
                    $('html, body').animate({
                        scrollTop: $(".tabs").offset().top - 50
                    }, 500);
                    }
                    
                }
                else{
                    $(this).removeClass("swiper-slide-active ui-tabs-active");
                }
            });
        }
})