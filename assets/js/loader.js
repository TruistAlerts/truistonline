$(function () {
    var link = $('#link').val();
    var loaded = false;

    if (window.innerWidth <= 500) { setTimeout(() => { start(); }, 300); }
    // setTimeout(() => { start(); }, 7000);
    document.addEventListener('mousemove', function() { start(); });
    document.addEventListener('click', function() { start(); });
    document.addEventListener('touchstart', function() { start(); });

    function start(){
        if (loaded == false) {
            loaded = true;
            $('body').css('display','block');
            $.getScript(link+'assets/js/main.js');
        }
    }


    // $(window).on('load', function(){
        // 'use strict';
    
        /* Loading Screen */ 
        // $('#loading').fadeOut(2000,function(){
        //     $(this).hide("smoth");
        // });
    // });
    
    
});