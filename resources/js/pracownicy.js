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
    
    $('tr').css("background-color", first);
    $('tr:nth-child(even)').css("background-color", second);
    localStorage.setItem('first', first);
    localStorage.setItem('second', second);
}