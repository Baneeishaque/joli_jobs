$(document).ready(function () {

    // alert("test");

    $("#apply_job_desclaimer_checkbox").change(function () {
        if ($(this).is(":checked")) {
            $("#apply_job_submit_button").attr('disabled', false);
        } else {
            $("#apply_job_submit_button").attr('disabled', true);
        }
    });
    
});