$(document).ready(function () {
    $('body').click(function () {
        var profile_open_container_value = $('#profile-open-container').css('display');

        if (profile_open_container_value == 'block') {
            $('#profile-open-container').slideToggle(900);
        }
    });






    $('#profile-open-icon').click(function (event) {
        event.stopPropagation();
        $('#profile-open-container').slideToggle(900);
    });
    $('#profile-open-container').click(function (event) {
        event.stopPropagation();
    })
    $('#profile-notification-icon').hover(function () {})









});