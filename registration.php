<?php

$a=mysqli_connect("localhost","root","","joli_jobs");
if(isset($_POST['submit']))
{
  $about_me=$_POST['about_me'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sponsor_type=$_POST['sponsor_type'];
  $sponsor_name=$_POST['sponsor_name'];
  $gender=$_POST['gender'];
  $present_address=$_POST['present_address'];
  $permanent_address=$_POST['permanent_address'];
  $educational_qualification=$_POST['educational_qualification'];
  $name=$_POST['name'];
  $name_father=$_POST['name_father'];
  $dob=$_POST['dob'];
  $age=$_POST['age'];
  $marriage=$_POST['marriage'];
  $religion=$_POST['religion'];
  $telephone=$_POST['telephone'];
  $mobile=$_POST['mobile'];
  $resume=$_POST['resume'];
  $technical_qualification=$_POST['technical_qualification'];
  $eng_strength=$_POST['eng_strength'];
  $hin_strength=$_POST['hin_strength'];
  $mal_strength=$_POST['mal_strength'];
  $eng_post_applied=$_POST['eng_post_applied'];
  $hin_post_applied=$_POST['hin_post_applied'];
  $mal_post_applied=$_POST['mal_post_applied'];
  $eng_experience=$_POST['eng_experience'];
  $hin_experience=$_POST['hin_experience'];
  $mal_experience=$_POST['mal_experience'];
  $eng_salary=$_POST['eng_salary'];
  $hin_salary=$_POST['hin_salary'];
  $mal_salary=$_POST['mal_salary'];
  
  
   $sql="insert into registration(about_me,email,password,sponsor_type,sponsor_name,gender,present_address,permanent_address,educational_qualification,name,name_father,dob,age,marriage,religion,telephone,mobile,resume,technical_qualification,eng_strength,hin_strength,mal_strength,eng_post_applied,hin_post_applied,mal_post_applied,eng_experience,hin_experience,mal_experience,eng_salary,hin_salary,mal_salary)value('$about_me','$email','$password','$sponsor_type','$sponsor_name','$gender','$present_address','$permanent_address','$educational_qualification','$name','$name_father','$dob','$age','$marriage','$religion','$telephone','$mobile','$resume','$technical_qualification','$eng_strength','$hin_strength','$mal_strength','$eng_post_applied','$hin_post_applied','$mal_post_applied','$eng_experience','$hin_experience','$mal_experience','$eng_salary','$hin_salary','$mal_salary')";
  mysqli_query($a,$sql);
  echo mysqli_error($a);
}
?>

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

  <!-- <div class="desclimer_section" id="registration_desclaimer_container">
    <div class="inner_container">
      <div id="" class="desclimer_textarea">

        <h3>Declaration and Acknowledgement</h3>

        <h5>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration with JOLi-JOBS.com means that
          your candidature details have been added to our Database. If there will be any matched vacancy as per your
          profile, then HR of JOLi-JOBS.com or it’s job centres may send you information of HR name and number with job
          Code. You can Call the HR on provided number and can ask her to apply for mentioned job Code and can update
          information any time during the year or can update information at any job center.Registration with
          JOLi-JOBS.com doesn’t mean that you will be guaranteed placed somewhere or we are assuring you about job
          placement. Registration fees is just a facilitation charges to keep your details in our database and to
          intimate you about any suitable vacancy. Registration fees is 250 - up to 500,in special offer or sensational
          period it may lesser than this. A).registration fee is 250 for 3 months validity with 3 interview B).300 is
          for 5 months and 5 interviews. C)reg. fee 500 for 1 year validity unlimited interviews can attend. The
          registration fee will be return back to you in case you are not placed anywhere within the validity period. We
          are just a mediator between you and company/ firm which job provides to you. If any disputes between you and
          them we have no responsibility on it. JOLi-JOBS.com and it’s job centre do not take any guarantee of your
          placement or selection against any vacancy as selection is totally depends upon the skills of jobseekers and
          this is sole right of HR of JOLi-JOBS.com or HR of its client to select or reject any candidate. After getting
          placement you have to pay a service charge of 35-50% of the first month salary and advance pay
          of1000-3000(depends up on salary package) getting appionment letter. If any of our job centre or HR assure you
          that they will place you or take it’s guarantee, please intimate the company for same and consider that
          statement as false & JOLi-JOBS.com do no support such false commitment as selection or joining is not in the
          hand of any job centre or in the hand of any HR. It’s totally depending upon the skills of job seekers and the
          requirement of HR of our client. We can’t force him to select or reject any particular person. JOLi-JOBS.com
          will take appropriate action against people who found involve in such false commitment. If you don’t accept
          any or all above Terms and Conditions, then you can withdraw your registration with JOLi-JOBS.com. Within 7
          days from the date of receipt of this email. If the registration is not cancelled or withdrawal within 7 days
          from the date of receipt of this mail then it’ll be considered that you accept and understand all above Terms
          & Conditions. You give authority to JOLi-JOBS.com to intimate you about jobs via SMS time to time during the
          period of registration. You give authority to JOLi-JOBS.com to send you SMS for any available offer, matching
          to your interest other then any jobs. In case of disputes arising out of disagreements in the terms stated in
          this agreement, the courts of Ernakulum district will have complete jurisdiction.
        </h5>


      </div>

      <div class="desclimer_button_area">
        <div class="left">
          <input type="checkbox" id="desclimer_agreement_checkbox" name="desclimer_checkbox" value="true">
          <label for="desclimer_agreement_checkbox">I agree to the Terms and Conditions</label>
        </div>

        <button class="desclimer_accept_button" id="desclimer_agreement_button" disabled>register</button>

      </div>
    </div>
  </div> -->

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
        <form class="konnect-form" method="post" id="regForm" name="regForm">
          <div class="row">
            <div class="col-md-6">
              <textarea class="form-control" id="comment" placeholder="About me" name="about_me" required></textarea>

              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your E-Mail" required>
              <div class="row">
            <div class="col-md-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
            <div class="col-md-6">
                <input type="password" class="form-control" id="confirmpassword" placeholder="Conform password" onfocusout="return Validate()" required>
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" id="sel1" name="sponsor_type" required>
                    <option value="father">Father</option>
                    <option value="mother">Mother</option>
                    <option value="spouse">Spouse</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Name of...." required
                    name="sponsor_name">
                </div>
              </div>
              <label class="radio-inline"><input type="radio" name="gender" value="male" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
              <label class="radio-inline"><input type="radio" name="gender" value="other">Male</label><br>
              <textarea class="form-control" id="comment" name="present_address" placeholder="Present Address.."
                required></textarea>
              <textarea class="form-control" id="comment" name="permanent_address" placeholder="Permenant Address..."
                required></textarea>
              <textarea class="form-control" id="comment" name="educational_qualification"
                placeholder="Educational Qualifiaction..." required></textarea>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" id="name" placeholder="Name of Applicant" required>
              <input type="text" class="form-control" name="name_father" id="phone" placeholder="Name of father"
                required>
              <input type="text" class="form-control" name="dob" id="name" placeholder="Date of birth" required>
              <input type="text" class="form-control" name="age" id="name" placeholder="Age" required>
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" id="sel1" name="marriage" required>
                    <option value="0">Maritial Status</option>
                    <option value="s">Single</option>
                    <option value="m">Married</option>
                    <option value="d">Divorced</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="form-control" id="sel1" name="religion">
                    <option value="0">Religion</option>
                    <option value="h">Hindu</option>
                    <option value="m">Muslim</option>
                    <option value="c">Christian</option>
                    <option value="o">Other</option>
                  </select>
                </div>
              </div>
              <input type="text" class="form-control" id="name" placeholder="Telephone" name="telephone" required>
              <input type="text" class="form-control" id="name" placeholder="Mobile" name="mobile" required>
              <span class="btn btn-file"> Browse Your Resume
                <input type="file" name="resume" required>
              </span>
              <br>
              <br>
              <textarea class="form-control" id="comment" placeholder="Techical Qualification..."
                name="technical_qualification" required></textarea>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="col-md-4">

                <p style="margin: 20px 0 16px;margin-bottom: 17px;"> English</p>
                <label class="radio-inline"><input name="eng_strength" type="radio" value="1" checked>Good</label>
                <label class="radio-inline"><input name="eng_strength" type="radio" value="2">Fair</label>
                <label class="radio-inline"><input name="eng_strength" type="radio" value="3">Poor</label>
              </div>
              <div class="col-md-4">
                <p style="margin: 20px 0 16px;margin-bottom: 17px;"> Hindi</p>
                <label class="radio-inline"><input name="hin_strength" type="radio" value="1" checked>Good</label>
                <label class="radio-inline"><input name="hin_strength" type="radio" value="2">Fair</label>
                <label class="radio-inline"><input name="hin_strength" type="radio" value="3">Poor</label>

              </div>
              <div class="col-md-4">
                <p style="margin: 20px 0 16px;margin-bottom: 17px;"> Malayalam</p>
                <label class="radio-inline"><input name="mal_strength" type="radio" value="1" checked>Good</label>
                <label class="radio-inline"><input name="mal_strength" type="radio" value="2">Fair</label>
                <label class="radio-inline"><input name="mal_strength" type="radio" value="3">Poor</label>

              </div>

            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-4">


              </div>
              <div class="col-md-4">

              </div>

            </div>

          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-4">

                <input type="text" class="form-control" id="name" name="eng_post_applied"
                  placeholder="Post Applied for..." required>
                <input type="text" class="form-control" id="name" name="eng_experience" placeholder="Experience..."
                  required>
                <input type="text" class="form-control" id="name" name="eng_salary" placeholder="Expected Salary.."
                  required>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="name" name="hin_post_applied"
                  placeholder="Post Applied for..." required>
                <input type="text" class="form-control" id="name" name="hin_experience" placeholder="Experience..."
                  required>
                <input type="text" class="form-control" id="name" name="hin_salary" placeholder="Expected Salary.."
                  required>

              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="name" name="mal_post_applied"
                  placeholder="Post Applied for..." required>
                <input type="text" class="form-control" id="name" name="mal_experience" placeholder="Experience..."
                  required>
                <input type="text" class="form-control" id="name" name="mal_salary" placeholder="Expected Salary.."
                  required>

              </div>

            </div>


          </div>
          <div class="checkbox">
          <label><input type="checkbox" id="apply_job_desclaimer_checkbox" required> Accept<a href="Termsandconditions.html" target="blank">Terms and conditions</a> </label>
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