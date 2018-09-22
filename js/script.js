$(document).ready(function () {



    //    home slider ------------------------------------------------
    $('#slider-counter-1').click(function () {
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
    $('#slider-counter-2').click(function () {
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
    $('#slider-counter-3').click(function () {
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
    $('#slider-counter-4').click(function () {
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
    $('#slider-counter-5').click(function () {
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


    $('#add-user-error-close').click(function () {
        // $('#add-user-error-container').addClass('add-user-error-container_hide');
        // $('#add-user-error-container').removeClass('add-user-error-container');
        $('#add-user-error-container').fadeOut(700);
    });


    $('#add-user-password-2').focusout(function () {
        var password1 = $('#add-user-password-1').val();
        var password2 = $('#add-user-password-2').val();
        if (password2 == '') {
            $('#add-user-error-text').html('no password entered');
            $('#add-user-error-container').fadeIn(700);
        } else if (password1 != password2) {
            // $('#add-user-error-container').val = ('password did not match');
            $('#add-user-error-text').html('password did not match');
            $('#add-user-error-container').fadeIn(700);
        }
    });

    $('#top-login-btn').click(function () {
        $('html, body').animate({
            scrollTop: $("#signup-container-main").offset().top
        }, 1000);
    });

    $('#top-register-btn').click(function () {
        $('html, body').animate({
            scrollTop: $("#add-user-container-main").offset().top
        }, 1000);
    });

    $('#add-user-radio-container').click(function () {
        $('#add-user-radio-container').toggleClass('add-user-radio-container_active');
    })

    $('#i-agree-with').click(function () {
        $('#add-user-radio-container').toggleClass('add-user-radio-container_active');
    })

    $('#add-user-reg-btn').click(function () {
        var password1 = $('#add-user-password-1').val();
        var password2 = $('#add-user-password-2').val();
        if (password2 == '') {
            $('#add-user-error-text').html('no password entered');
            $('#add-user-error-container').fadeIn(700);
        } else if (password1 != password2) {
            // $('#add-user-error-container').val = ('password did not match');
            $('#add-user-error-text').html('password did not match');
            $('#add-user-error-container').fadeIn(700);
        }
    })
});