import './account.scss';
import $ from 'jquery';
import "jquery-validation";


//Проверка номера
$("#input-phone").keyup(function(e){
    this.value = this.value.replace(/[^\d\-\+\(\)]+/g, '');
});


//Валидация формы

$(".account__wrapper").validate({
    rules:{
        email:{
            email: true
        },

    },
    messages:{
        email:{
            email: "Неверно введен e-mail"
        },
    }
});

//Click accordion

$(".account__history-wrapper").click(function (){

    $(".account__history-wrapper").toggleClass("account__history-wrapper_active");
    $(".account__history-list").slideToggle();

});

