import $, { each, error } from 'jquery';
window.$ = $;

$(document).ready(function () {
    calcualte();
})

$('input').on("change", function () {
    calcualte();
})

$('select').on("change", function () {
    calcualte();
})

function calcualte() {
    $('tr').each(function () {
        let price = $(this).find('input[name=kwota]').val();
        let quantity = $(this).find('input[name=ilosc]').val();
        let vat = $(this).find('select[name=VAT]').val();
        vat = '0.' + (100 - vat);
        if (vat == '0.100') vat = 1;
            
        $(this).find('.kBrutto').text((price * vat).toFixed(2) + ' zł');
        $(this).find('.wNetto').text((price * quantity) + ' zł');
        $(this).find('.wBrutto').text(((price * vat) * quantity).toFixed(2) + ' zł');
    })
}

$('#filter').on("click", function () {
    $('tr').each(function (){
        if($(this).find('input[name=kwota]').val() > 1000){
            $(this).css("background-color", "green");
        }
        else {
            $(this).css("background-color", "");
        }
    })
})