

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <!-- Favocon -->
  <link href="img/fav.png" rel="shortcut icon" type="image/x-icon" />

  <!-- Title -->
  <title>joli-jobs-registration</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom icon Fonts -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Animated CSS -->
  <link href="css/animate.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Main CSS -->

  <link href="css/default.css" rel="stylesheet">

  <link rel="stylesheet" href="css/custom.css" type="text/css" />


</head>

<!-- Body -->

<body>

  <!-- Pre Loader -->
  <div class="loading">
    <div class="loader"></div>
  </div>

  <!-- Top Bar  -->
  <div class="konnect-info">
    <div class="container">
      <div class="row">
        <!-- Top bar Left -->
        <div class="col-md-6 col-sm-8 hidden-xs">
          <ul>
            <li><i class="fa fa-paper-plane" aria-hidden="true"></i> jolijobs4you@gmail.com </li>
            <li class="li-last"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>9544773656</li>
          </ul>
        </div>
        <!-- Top bar Right -->
        <div class="col-md-6 col-sm-4">
          <ul class="konnect-float-right">
            <li class="li-last"> <a target="_blank"
                href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"
                target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"> <i
                  class="fa fa-instagram"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation + LOGO Area -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Responsive Menu -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <i
            class="fa fa-bars" aria-hidden="true"></i> </button>
        <!-- Logo -->
        <a class="navbar-brand page-scroll logo-color" href="index.html"><img src="img/logo.png" alt="logo"
            width="162"></a> </div>

      <!-- Menu Items -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="index.html">Home</a> </li>
          <li> <a href="about-us.html">About Us</a> </li>
          <li> <a href="registration.php">Registration</a> </li>
          <li> <a href="apply-job.php">Post Your Vacancy</a> </li>
          <li><a href="vacancy.php">Vacancies</a></li>
          <li><a href="contact.html">Contact Us</a></li>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
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