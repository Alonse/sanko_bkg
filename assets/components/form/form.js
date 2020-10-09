import './form.scss';
import $ from 'jquery';
import "jquery-validation";



//Проверка номера
$("#input-phone").keyup(function(e){
    this.value = this.value.replace(/[^\d\-\+\(\)]+/g, '');
});


//Валидация формы



$("#contact-form").validate({
    rules:{
        name:{
            required: true
        },
        phone:{
            required  : true
        },
        email:{
            email: true
        },
        message:{
            required: true
        }

    },
    messages:{
        name:{
            required: "Необходимое поле",
        },
        phone:{
            required: "Необходимое поле",
            minlength : "Не менее 10 знаков",
            maxlength : "Не более 20 знаков"
        },
        email:{
            email: "Неверно введен e-mail"
        },
        message:{
            required: "Необходимое поле",
        }
    },
    submitHandler: function (form) {
        $.ajax({
            type: "POST",
            url: "/wp-content/themes/Sanko/src2/sendMail.php",
            data: $("#contact-form").serialize(),
            success: function () {
                $(".form__title").addClass("form__title-alt_move");
                $(".form__title-alt").addClass("form__title-alt_move");
                $(".form__wrapper").addClass("form__content_move");
                $(".form__textarea-wrapper").addClass("form__content_move");
                $(".form__agreement").addClass("form__content_move");
                $(".form__addText").addClass("form__addText_move");

                setTimeout(function(){
                    $(".form__title").removeClass("form__title-alt_move");
                    $(".form__title-alt").removeClass("form__title-alt_move");
                    $(".form__wrapper").removeClass("form__content_move");
                    $(".form__textarea-wrapper").removeClass("form__content_move");
                    $(".form__agreement").removeClass("form__content_move");
                    $(".form__addText").removeClass("form__addText_move");
                }, 3000);
                $("#contact-form").trigger("reset");
            }
        });
        return false;
    }
});




//Проверка на checked

$('.form__container').on('click', function () {
    if ( $("#checkbox_check").is(':checked') ) {
        $(".form__button").addClass("form__button_disable");
        $( "#checkbox_check" ).prop( "checked", false );
    } else {
        $(".form__button").removeClass("form__button_disable");
        $( "#checkbox_check" ).prop( "checked", true );
    }
})