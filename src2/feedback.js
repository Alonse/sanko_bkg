jQuery(function($){

    //Scroll to ID

    let hash = window.location.hash;
    let height = 80;

    if ($(window).width() < 768) {
        height = 80
    }
    else if ($(window).width() < 1024) {
        height = 120
    }

    else if ($(window).width() < 1280) {
        height = 80
    }

    else if ($(window).width() < 1920) {
        height = 80
    }

    if (hash !== "") {
        $('html, body').animate({
            scrollTop: $(hash).offset().top - height
        }, 800, function(){
            window.location.hash = hash;
        });
    }

});