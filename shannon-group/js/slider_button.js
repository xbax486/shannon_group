/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    $('.slide_info_btn').mouseenter(function(){
        
        $('.slide_info_btn').css('border-color', '#3e6e00');
        $('.slide_info_btn').css('color', '#fff');
        $('.slide_info_btn').css('background-color', '#3e6e00');
    });
    
    $('.slide_info_btn').mouseleave(function(){
        $('.slide_info_btn').css('border', '3px solid #3e6e00');
        $('.slide_info_btn').css('background-color', '#79a540');
    });
    
    $('.slide_info_btn').click(function(){
        
        $('.slide_info_btn').css('border-color', '#000');
        $('.slide_info_btn').css('background-color', '#000');
    });
});
