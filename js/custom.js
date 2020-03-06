$(document).ready(function () {

    function validateForm() {
        // var f1 = document.forms["regForm"];
        // alert(f1)
        // if (x == "") {
        //   alert("Name must be filled out");
        //   return false;
        // }

        v_array = ["about_me", "email", "sponsor_type", "spnsor_name", "gender", "name", "name_father", "dob", "age", "marriage", "religion", "telephone", "mobile", "resume", "eng_strength", "hin_strength", "mal_strength"]

        for (i = 0; i < v_array.length; i++) {
            name = v_array[i];
            ans = $("#regForm input[name=" + name + "]").val();
            console.log(ans);
        }

    }



    $("#desclimer_agreement_checkbox").change(function () {
        if ($(this).is(":checked")) {
            $("#desclimer_agreement_button").attr('disabled', false);
        } else {
            $("#desclimer_agreement_button").attr('disabled', true);
        }
    });



    $("#registration_dummy_submit_button").click(function () {
        validateForm();
    });






















    



});