/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    $('.my-menu-toggle').click(function(){
        $('.main-navigation').slideToggle('400', function(){
            
        });
        // Optional return false to avoid the page "jumping" when clicked
        //return false;
    });
});

