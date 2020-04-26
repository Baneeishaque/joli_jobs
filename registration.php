<?php
  include_once('header.php');
?>
  <!-- Banner -->
  <header class="innner-page">
    <div class="container">
      <h1><i class="fa fa-angle-double-right" aria-hidden="true"></i> Submit Your Application</h1>
    </div>
  </header>

  <!--Apply Job / Submit Application-->
  <section>
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-dark">
            <!--Services Heading-->
            <h2 class="section-heading text-dark">Submit <span>Your Application</span></h2>

            <div class="konnect-space"></div>
          </div>
        </div>
        <!-- Submit Application-->
        <form class="konnect-form" action="pushdata.php" method="post" id="regForm" name="regForm" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <input type="text"  class="form-control" id="comment" placeholder="Name" name="name" required>

              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your E-Mail" required>
              <div class="row">
            <div class="col-md-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required minlength="5"/>
                </div>
            <div class="col-md-6">
                <input type="password" class="form-control" id="confirmpassword" placeholder="Conform password" onfocusout="return Validate()" required minlength="5" />
                </div>
            </div>
              
              <label class="radio-inline"><input type="radio" name="gender" value="m" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="gender" value="f">Female</label>
              <label class="radio-inline"><input type="radio" name="gender" value="o">Other</label><br><br>
              <textarea class="form-control" id="comment" name="address" placeholder="Address.."
                required></textarea>
             
              
            </div>
            <div class="col-md-6">
              
              
              <input type="text" class="form-control" name="dob" id="name" placeholder="Date of birth" required>
              <input type="text" class="form-control" name="age" id="name" placeholder="Age" required>
              
              
              <input type="text" class="form-control" id="name" placeholder="Mobile" name="mobile" required>
              <span class="btn btn-file"> Browse Your Resume
                <input type="file" name="resume">
              </span>
              <br>
              <br>
              <textarea class="form-control" id="comment" name="educational_qualification"
                placeholder="Educational Qualifiaction..." required></textarea>
            </div>


          </div>
          <div class="row">
            <div class="col-md-6">
              <input type="text"  class="form-control" id="comment" placeholder="Payment" name="payment" required>
          </div>
      </div>

          


          </div>
          <div class="checkbox">
          <label><input name="condition_accept" type="checkbox" id="apply_job_desclaimer_checkbox" required> Accept<a href="Termsandconditions.html" target="blank">Terms and conditions</a> </label>
        </div>


          <div class="row">
            <div class="col-md-12"><br>
              <input type="submit" name="submit" id="registration_dummy_submit_button" class="konnect-submit" disabled>
              <button onClick="window.location.reload();" class="konnect-submit" style="background-color: red;">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!--Call To Action-->
  <aside class="dark-bg">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 text-center text-white">
          <h3 class="margin-0">Want to Get in Touch with us <a href="registration.php" class="konnect-button-3">Submit
              Your Query</a></h3>
        </div>
      </div>
    </div>
  </aside>
  <!--Contact Us-->
  <section class="footer-contact">
    <div class="container">
      <div class="row">
        <!-- About Us-->
        <div class="col-md-3 col-sm-6 footer-box"> <img src="img/logo.png">
        </div>

        <!-- Address-->
        <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/location.png" alt="icon"
            class="konnect-contact-icon">
          <h3>Our <span class="color-default">Location</span></h3>
          <p>55/558 2nd floor Moins Building, Near Manorama Junction<br>
            Panampilly Nagar Pin: 682036</p>
        </div>

        <!--     Phone Numbers-->
        <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/phone.png" alt="icon"
            class="konnect-contact-icon">
          <h3>Phone <span class="color-default">Contact</span></h3>
          <p>9544773656<br>
            9544778622<br>
            9037735602</p>
        </div>

        <!-- Email Details -->
        <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/email.png" alt="icon"
            class="konnect-contact-icon">
          <h3>Email <span class="color-default">Us</span></h3>
          <p>jolijobs4you@gmail.com

        </div>
      </div>
    </div>
  </section>
  <!--Back To Top-->
  <span id="back-to-top" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip"
    data-placement="left"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
  <!--Main Footer-->

  <footer class="konnect-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-left">

          <!--Footer Social Icons-->
          <div class="contact-social">
            <p> <a
                href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"
                target="blank"> <i class="fa fa-facebook"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a>
            </p>
          </div>
        </div>

        <!-- Footer Copy rights-->
        <div class="col-sm-6 text-right">
          <p> &copy;2019 All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->

  <script src="assets/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/default.js"></script>

  <!-- <script src="js/custom.js"></script> -->


  <script>
    // (function (i, s, o, g, r, a, m) {
    //   i['GoogleAnalyticsObject'] = r;
    //   i[r] = i[r] || function () {
    //     (i[r].q = i[r].q || []).push(arguments)
    //   }, i[r].l = 1 * new Date();
    //   a = s.createElement(o),
    //     m = s.getElementsByTagName(o)[0];
    //   a.async = 1;
    //   a.src = g;
    //   m.parentNode.insertBefore(a, m)
    // })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    // ga('create', 'UA-77800499-1', 'auto');
    // ga('send', 'pageview');
  </script>
  <script type="text/javascript">

  var pass = false;
  var check = false;


  function updateButton() {
    if(pass==true && check==true) {
      // console.log("ok");
      $("#registration_dummy_submit_button").attr('disabled', false);
    } 
  }

  
  
  function Validate() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmpassword").value;
      if (password != confirmPassword) {
          alert("Passwords do not match.");
          $("#registration_dummy_submit_button").attr('disabled', true);
          pass = false;
      }
      else {
        pass = true;
      }
      updateButton();
    return true;
  }

  $("#apply_job_desclaimer_checkbox").change(function () {
        // console.log("here");
        if ($(this).is(":checked")) {
          check = true;
            // $("#desclimer_agreement_button").attr('disabled', false);
        } else {
          check = false;
            $("#desclimer_agreement_button").attr('disabled', true);
        }
        updateButton();
    });
</script>
</body>


</html>