import './forget.scss';
import $ from 'jquery';
import "jquery-validation";


//Валидация формы



$("#contact-form").validate({
    rules:{
        email:{
            required: true,
            email: true
        },

    },
    messages:{
        email:{
            email: "Неверно введен e-mail",
            required: "Необходимое поле"
        },
    }
});






