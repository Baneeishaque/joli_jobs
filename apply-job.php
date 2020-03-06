<?php
include_once('conn.php');
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
  <title>RecruitPlus - Staffing and Consulting Bootstrap HTML Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom icon Fonts -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Animated CSS -->
  <link href="css/animate.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Main CSS -->

  <link href="css/default.css" rel="stylesheet">


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
      <div class="row">
        <div class="col-md-12 text-dark">
          <!--Services Heading-->
          <h2 class="section-heading text-dark">Submit <span>Your Application</span></h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
          <div class="konnect-space"></div>
        </div>
      </div>
      <!-- Submit Application-->
      <form class="konnect-form" id="contactForm" method="POST" action="">
         <div class="row">
                    <div class="col-md-4">
             <input type="text" class="form-control" id="phone" name="tittle" placeholder="Job Tittle" required style="margin-top: 6%;">
        </div>
            <div class="col-md-4">
                
                <input type="date" class="form-control" name="date" placeholder="Date" style="margin-top: 6%;">
                 <label for="date-label"></label>
    
        </div>
            <div class="col-md-4">
                 <textarea class="form-control" id="comment" name="description" placeholder="Description.." required></textarea>
          
                 
        </div>

            
            
            </div>
        <div class="row">
          <div class="col-md-6">
            <textarea class="form-control" id="comment" name="company_address" placeholder="Company name&Address..."
              required></textarea>

            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail" required>
            <input type="text" class="form-control" name="mobile" id="phone" placeholder="Mobile" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="name" placeholder="Contact Person" required
              name="contact_person">
            <input type="text" class="form-control" id="phone" placeholder="Position" required name="position">
            <input type="text" class="form-control" id="phone" placeholder="Office Phone" required name="office_phone">
            <input type="text" class="form-control" id="phone" placeholder="Residence" required name="residence"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
              <center>
                <h4>Post Vacancy*</h4>
              </center>
              <input type="text" class="form-control" id="name" placeholder="Post Vacancy" required
                name="post_vacancy_1">
              <input type="text" class="form-control" id="name" placeholder="Number of vacancy" required
                name="number_of_vacancy_1">
              <p style="margin: 20px 0 16px;margin-bottom: 17px;"> Gender</p>
              <label class="radio-inline"><input type="radio" name="gender_1" value="m" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="gender_1" value="f">Female</label>
              <label class="radio-inline"><input type="radio" name="gender_1" value="o">Other</label>
              <br> <br>
              <input type="text" class="form-control" id="name" placeholder="Experience" name="experience_1" required>
              <input type="text" class="form-control" id="name" placeholder="Working time" name="working_time_1"
                required>
              <input type="text" class="form-control" id="name" placeholder="Skill Requiered" name="skill_required_1"
                required>
              <input type="text" class="form-control" id="name" placeholder="Salary Offered" name="salary_offered_1"
                required>
              <input type="text" class="form-control" id="name" placeholder="Location" name="location_1" required>
            </div>

            <div class="col-md-4">
              <center>
                <h4>Post Vacancy</h4>
              </center>
              <input type="text" class="form-control" id="name" placeholder="Post Vacancy" name="post_vacancy_2">
              <input type="text" class="form-control" id="name" placeholder="Number of vacancy"
                name="number_of_vacancy_2">
              <p style="margin: 20px 0 16px;margin-bottom: 17px;"> Gender</p>
              <label class="radio-inline"><input type="radio" name="gender_2" value="m" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="gender_2" value="f">Female</label>
              <label class="radio-inline"><input type="radio" name="gender_2" value="o">Other</label>
              <br> <br>
              <input type="text" class="form-control" id="name" placeholder="Experience" name="experience_2">
              <input type="text" class="form-control" id="name" placeholder="Working time" name="working_time_2">
              <input type="text" class="form-control" id="name" placeholder="Skill Requiered" name="skill_required_2">
              <input type="text" class="form-control" id="name" placeholder="Salary Offered" name="salary_offered_2">
              <input type="text" class="form-control" id="name" placeholder="Location" name="location_2">


            </div>
            <div class="col-md-4">
              <center>
                <h4>Post Vacancy</h4>
              </center>

              <input type="text" class="form-control" id="name" placeholder="Post Vacancy" name="post_vacancy_3">
              <input type="text" class="form-control" id="name" placeholder="Number of vacancy" name="number_of_vacancy_3">
              <p style="margin: 20px 0 16px;margin-bottom: 17px;"> Gender</p>
              <label class="radio-inline"><input type="radio" name="gender_3" value="m" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="gender_3" value="f">Female</label>
              <label class="radio-inline"><input type="radio" name="gender_3" value="o">Other</label>
              <br> <br>
              <input type="text" class="form-control" id="name" name="experience_3" placeholder="Experience">
              <input type="text" class="form-control" id="name" name="working_time_3" placeholder="Working time">
              <input type="text" class="form-control" id="name" name="skill_required_3" placeholder="Skill Requiered">
              <input type="text" class="form-control" id="name" name="salary_offered_3" placeholder="Salary Offered">
              <input type="text" class="form-control" id="name" name="location_3" placeholder="Location">

            </div>
          </div>

        </div>
        <div class="checkbox">
          <label><input type="checkbox" id="apply_job_desclaimer_checkbox" required> Accept<a href="Termsandconditions.html" target="blank">Terms and conditions</a> </label>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" id="apply_job_submit_button" class="konnect-submit" disabled>Submit</button>
            <button onClick="window.location.reload();" class="konnect-submit" >Add next job</button>
          </div>
        </div>
      </form>
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
  <a target="_blank" style="position:fixed; bottom: 10px; right:10px;z-index:999"
    href="http://www.konnectplugins.com/template/recruit-plus-staffing-and-recruiting-wordpress-theme/"
    rel="nofollow"></a>
  <!-- jQuery -->

  <script src="assets/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/default.js"></script>

  <script src="js/applyJob.js"></script>
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
</body>

<?php

if(isset($_POST['company_address'])) {
  $tittle = $_POST['tittle'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  $company_address = $_POST['company_address'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $contact_person = $_POST['contact_person'];
  $position = $_POST['position'];
  $office_phone = $_POST['office_phone'];
  $residence = $_POST['residence'];
  $post_vacancy_1 = $_POST['post_vacancy_1'];
  $number_of_vacancy_1 = $_POST['number_of_vacancy_1'];
  $gender_1 = $_POST['gender_1'];
  $experience_1 = $_POST['experience_1'];
  $working_time_1 = $_POST['working_time_1'];
  $skill_required_1 = $_POST['skill_required_1'];
  $salary_offered_1 = $_POST['salary_offered_1'];
  $location_1 = $_POST['location_1'];
  $post_vacancy_2 = $_POST['post_vacancy_2'];
  $number_of_vacancy_2 = $_POST['number_of_vacancy_2'];
  $gender_2 = $_POST['gender_2'];
  $experience_2 = $_POST['experience_2'];
  $working_time_2 = $_POST['working_time_2'];
  $skill_required_2 = $_POST['skill_required_2'];
  $salary_offered_2 = $_POST['salary_offered_2'];
  $location_2 = $_POST['location_2'];
  $post_vacancy_3 = $_POST['post_vacancy_3'];
  $number_of_vacancy_3 = $_POST['number_of_vacancy_3'];
  $gender_3 = $_POST['gender_3'];
  $experience_3 = $_POST['experience_3'];
  $working_time_3 = $_POST['working_time_3'];
  $skill_required_3 = $_POST['skill_required_3'];
  $salary_offered_3 = $_POST['salary_offered_3'];
  $location_3 = $_POST['location_3'];

  $sql = "INSERT INTO vacancy (tittle,date , description,company_address, email, mobile, contact_person, position, office_phone, residence, post_vacancy_1, number_of_vacancy_1, gender_1, experience_1, working_time_1, skill_required_1, salary_offered_1, location_1, post_vacancy_2, number_of_vacancy_2, gender_2, experience_2, working_time_2, skill_required_2, salary_offered_2, location_2, post_vacancy_3, number_of_vacancy_3, gender_3, experience_3, working_time_3, skill_required_3, salary_offered_3, location_3) VALUES ('$tittle','$date','$description' ,'$company_address', '$email', '$mobile', '$contact_person', '$position', '$office_phone', '$residence', '$post_vacancy_1', '$number_of_vacancy_1', '$gender_1', '$experience_1', '$working_time_1', '$skill_required_1', '$salary_offered_1', '$location_1', '$post_vacancy_2', '$number_of_vacancy_2', '$gender_2', '$experience_2', '$working_time_2', '$skill_required_2', '$salary_offered_2', '$location_2', '$post_vacancy_3', '$number_of_vacancy_3', '$gender_3', '$experience_3', '$working_time_3', '$skill_required_3', '$salary_offered_3', '$location_3')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('data inserted successfully');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>


</html>