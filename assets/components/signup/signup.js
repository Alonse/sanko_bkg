import './signup.scss';
import $ from 'jquery';
import "jquery-validation";


//Валидация формы



$("#contact-form").validate({
    rules:{
        name:{
            required: true
        },
        surname:{
            required: true
        },
        email:{
            required: true,
            email: true
        },
        password:{
            required: true
        },
        passwordConform:{
            required: true
        }

    },
    messages:{
        name:{
            required: "Необходимое поле",
        },
        email:{
            required: "Необходимое поле",
            email: "Неверно введен e-mail"
        },
        surname:{
            required: "Необходимое поле",
        },
        password:{
            required: "Необходимое поле",
        },
        passwordConform:{
            required: "Необходимое поле",
        }
    }
});




//Проверка на checked


$('.check').on('click', function () {
    if ( $("#checkbox_check").is(':checked') ) {
        $(".signup__button").addClass("signup__button_disable");
        $( "#checkbox_check" ).prop( "checked", false );
    } else {
        $(".signup__button").removeClass("signup__button_disable");
        $( "#checkbox_check" ).prop( "checked", true );
    }
})




