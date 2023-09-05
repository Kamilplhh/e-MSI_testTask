import './bootstrap';
import $, { error } from 'jquery';
window.$ = $;

$('.ADD').on("click", function() {
    $('.table').find('tr:last').before('<tr>'+
    '<td>' +
        '<input type="text" name="nip">' +
    '</td>' +
    '<td>' +
        '<input type="text" name="regon">' +
    '</td>' +
    '<td>' +
       ' <input type="text" name="nazwa">' +
    '</td>' +
    '<td>' +
        '<input type="checkbox" name="platnik">' +
    '</td>' +
    '<td>' +
        '<input type=" text" name="ulica">' +
    '</td>' +
    '<td>' +
        '<input type="text" name="nrDomu">' +
    '</td>' +
    '<td>' +
        '<input type="text" name="nrMieszkania">' +
    '</td>' +
    '<td>' +
        '<button class="submit">Add</button>' +
    '</td>' +
'</tr>');
})

$(document).on("click", '.submit', function() {
    let parent = $(this).closest("tr");
    let x = 0;
    parent.find('input').each(function(){
        if($(this).val() == 0){
            x = 1;
        }
    })
    if(x === 1){
        alert( "Please fulfill all the inputs" );
    }
    else {
        let nip = parent.find('input[name=nip]').val();
        let regon = parent.find('input[name=regon]').val();
        let nazwa = parent.find('input[name=nazwa]').val();
        let platnik = 0;
        if(parent.find('input[name=platnik]').is(':checked'))platnik = 1
        let ulica = parent.find('input[name=ulica]').val();
        let nrDomu = parent.find('input[name=nrDomu]').val();
        let nrMieszkania = parent.find('input[name=nrMieszkania]').val();

        $.ajax({
            url: 'send',
            type: 'POST',
            data: {
                _token: $('#signup-token').val(),
                nip: nip,
                regon: regon,
                nazwa: nazwa,
                platnik: platnik,
                ulica: ulica,
                nrDomu: nrDomu,
                nrMieszkania: nrMieszkania
            },
            success: function (Response) {
                $(location).prop('href', '/kontrahenci');
            },
            error: function () {
                alert('Something went wrong');
                $(location).prop('href', '/kontrahenci');
            }
        });
    }

})