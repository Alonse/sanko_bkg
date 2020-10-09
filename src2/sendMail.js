jQuery(document).ready(function ($) {

    // $( '#contact-form' ).on('submit', function (event) {
    //     event.preventDefault();

    //     let name = $(this).find('[name="name"]').val();
    //     let phone = $(this).find('[name="phone"]').val();
    //     let mail = $(this).find('[name="email"]').val();
    //     let text = $(this).find('[name="message"]').val();
    //     let pageName = document.querySelector('.page-name').innerHTML;

    //     let data = {
    //         formName: name,
    //         formPhoneNumber: phone,
    //         comment: text,
    //         email: mail,
    //         page:pageName
    //     };
    //     $.ajax({
    //         type: 'POST',
    //         url: '/wp-content/themes/Sanko/src2/sendMail.php',
    //         data: data,
    //     }).done(function () {
            
    //         // $("input[type=text], textarea").val("");
    //         // document.querySelector('.form__title-alt').classList.add('form__title-alt_move');
    //         $(".form__wrapper").addClass("form__content_move");
    //         $(".form__addText").addClass("form__addText_move");

    //         setTimeout(function(){
    //             $(".form__title-alt").removeClass("form__title-alt_move");
    //             $(".form__wrapper").removeClass("form__content_move");
    //             $(".form__addText").removeClass("form__addText_move");
    //         }, 3000); 

    //     }).fail( function (x, y, z) {
    //         alert('Не отправлено')
    //     });
    // });

    $( '#form__wrapper' ).on('submit', function (event) {
        event.preventDefault();

        let name = $(this).find('[name="input-name"]').val();
        let phone = $(this).find('[name="input-phone"]').val();
        let mail = $(this).find('[name="input-email"]').val();
        let text = $(this).find('[name="input-message"]').val();

        let data = {
            formName: name,
            formPhoneNumber: phone,
            comment: text,
            email: mail
        };
        $.ajax({
            type: 'POST',
            url: '/wp-content/themes/Sanko/src2/sendMail.php',
            data: data,
        }).done(function () {
            console.log(data);
            $("input[type=text], textarea").val("");

        }).fail( function (x, y, z) {
            alert('Не отправлено')
        });
    });



});