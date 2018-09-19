$(document).ready(function(){
    
    
    
    //    home slider ------------------------------------------------
    $('#slider-counter-1').click(function(){
        $('#slider-counter-1').addClass('counter-active');
        $('#slider-counter-2').removeClass('counter-active');
        $('#slider-counter-2').addClass('counter-inactive');
        $('#slider-counter-3').removeClass('counter-active');
        $('#slider-counter-3').addClass('counter-inactive');
        $('#slider-counter-4').removeClass('counter-active');
        $('#slider-counter-4').addClass('counter-inactive');
        $('#slider-counter-5').removeClass('counter-active');
        $('#slider-counter-5').addClass('counter-inactive');
    });
    $('#slider-counter-2').click(function(){
        $('#slider-counter-2').addClass('counter-active');
        $('#slider-counter-1').removeClass('counter-active');
        $('#slider-counter-1').addClass('counter-inactive');
        $('#slider-counter-3').removeClass('counter-active');
        $('#slider-counter-3').addClass('counter-inactive');
        $('#slider-counter-4').removeClass('counter-active');
        $('#slider-counter-4').addClass('counter-inactive');
        $('#slider-counter-5').removeClass('counter-active');
        $('#slider-counter-5').addClass('counter-inactive');
    });
    $('#slider-counter-3').click(function(){
        $('#slider-counter-3').addClass('counter-active');
        $('#slider-counter-2').removeClass('counter-active');
        $('#slider-counter-2').addClass('counter-inactive');
        $('#slider-counter-1').removeClass('counter-active');
        $('#slider-counter-1').addClass('counter-inactive');
        $('#slider-counter-4').removeClass('counter-active');
        $('#slider-counter-4').addClass('counter-inactive');
        $('#slider-counter-5').removeClass('counter-active');
        $('#slider-counter-5').addClass('counter-inactive');
    });
    $('#slider-counter-4').click(function(){
        $('#slider-counter-4').addClass('counter-active');
        $('#slider-counter-2').removeClass('counter-active');
        $('#slider-counter-2').addClass('counter-inactive');
        $('#slider-counter-3').removeClass('counter-active');
        $('#slider-counter-3').addClass('counter-inactive');
        $('#slider-counter-1').removeClass('counter-active');
        $('#slider-counter-1').addClass('counter-inactive');
        $('#slider-counter-5').removeClass('counter-active');
        $('#slider-counter-5').addClass('counter-inactive');
    });
    $('#slider-counter-5').click(function(){
        $('#slider-counter-5').addClass('counter-active');
        $('#slider-counter-2').removeClass('counter-active');
        $('#slider-counter-2').addClass('counter-inactive');
        $('#slider-counter-3').removeClass('counter-active');
        $('#slider-counter-3').addClass('counter-inactive');
        $('#slider-counter-4').removeClass('counter-active');
        $('#slider-counter-4').addClass('counter-inactive');
        $('#slider-counter-1').removeClass('counter-active');
        $('#slider-counter-1').addClass('counter-inactive');
    });
    //    end slider------------------------------------------
    
    
    
    
});