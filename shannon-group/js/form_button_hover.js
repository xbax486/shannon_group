/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function($){
    $('.btn_submit').mouseenter(function(){
        $('.btn_submit').prop('value', 'Hover');
        $('.btn_submit').css('border', 'none');
        $('.btn_submit').css('background-color', '#3e6e00');
    });
    
    $('.btn_submit').mouseleave(function(){
        $('.btn_submit').prop('value', 'Submit');
        $('.btn_submit').css('border', '3px solid #3e6e00');
        $('.btn_submit').css('background-color', '#79a540');
    });
    
    $('.btn_submit').click(function(){
        $('.btn_submit').prop('value', ':active');
        $('.btn_submit').css('border', 'none');
        $('.btn_submit').css('background-color', '#000');
    });
});