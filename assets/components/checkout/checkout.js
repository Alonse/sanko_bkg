import './checkout.scss';
import $ from 'jquery';

//Product count


$('.checkout__wrapper').attr('data-total', parseInt($(".checkout__price-number-total").text()));

const priceFirst =  $(".checkout__wrapper").data("price");
$(".checkout__number-input").val($(".checkout__wrapper").data("count"));
let price;



$("#button_plus").click(function (){
    let qty = parseInt($("#num_count").val());
    qty = qty + 1;
    $("#num_count").val(qty);
    let priceSimple = parseInt($(".checkout__price-number-total").text());
    price = priceSimple+priceFirst;
    $(".checkout__price-number-total").text(price);
    $('.checkout__wrapper').attr('data-total', price);
    $('.checkout__wrapper').attr('data-count', qty);
});

$("#button_minus").click(function (){
    let qty = parseInt($("#num_count").val());
    if(qty>0) {
        qty = qty - 1;
        $("#num_count").val(qty);
        let priceSimple = parseInt($(".checkout__price-number-total").text());
        price = priceSimple-priceFirst;
        $(".checkout__price-number-total").text(price);
        $('.checkout__wrapper').attr('data-total', price);
        $('.checkout__wrapper').attr('data-count', qty);
    }



});
