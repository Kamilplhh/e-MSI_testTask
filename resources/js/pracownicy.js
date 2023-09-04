import $, { error } from 'jquery';
window.$ = $;

$(document).ready(function(){
    $('input[name=first]').val(localStorage.getItem('first'));
    $('input[name=second]').val(localStorage.getItem('second')); 
    changeColor();
})

$('input[type=color]').on("change", function(){
    changeColor();
})

function changeColor() {
    let first = $('input[name=first]').val();
    let second = $('input[name=second]').val();
    if(first === '#000000'){
        first = "#a1a1a1";
        second = "#777575";

        $('input[name=first]').val(first);
        $('input[name=second]').val(second);
    }
    
    $('tr').css("background-color", first);
    $('tr:nth-child(even)').css("background-color", second);
    localStorage.setItem('first', first);
    localStorage.setItem('second', second);
}