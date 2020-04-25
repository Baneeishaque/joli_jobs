<?php
    session_start();
    include_once('db.php');
    $user_id = '';
    if(isset($_SESSION['user_in'])){
      $user_id = $_SESSION['user_in'];
    }
    

    if(isset($_POST['vacancy'])){
        $day = date("Y-m-d");
        $sql = "INSERT INTO `applications` (`id`, `user_id`, `vacancy_id`, `date`) VALUES (NULL, '".$user_id."', '".$_GET['vacancy_id']."', '".$day."');";


        $result = $conn->query('SELECT * FROM `applications` WHERE `user_id`='.$user_id.' AND `vacancy_id`='.$_GET['vacancy_id']);
        if($result->num_rows < 1) {
            if($conn->query($sql) === TRUE) {
                $message = "application successfull";
            }
            else {
                $message = "application adding failure";
            }
        } else {
            $message = "already applied";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Apply for the job</title>
    <!-- Favocon -->
    <link href="img/fav.png" rel="shortcut icon" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom icon Fonts -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Animated CSS -->
  <link href="css/animate.css" media="all" rel="stylesheet" type="text/css" />

  <!-- Main CSS -->

  <link href="css/default.css" rel="stylesheet">
</head>
<body>
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
          <li class="li-last"> <a target="_blank" href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="https://www.instagram.com/jolijobs.c/"> <i class="fa fa-instagram"></i> </a></li>
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars" aria-hidden="true"></i> </button>
      <!-- Logo --> 
      <a class="navbar-brand page-scroll logo-color" href="index.html"><img src="img/logo.png" alt="logo" width="162"></a> </div>
    
    <!-- Menu Items -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="index.html">Home</a> </li>
        <li> <a href="about-us.html">About Us</a> </li>
        <li> <a href="registration.php">Registration</a> </li>
          <li> <a href="add_vacancy.php">Post Your Vacancy</a> </li>
            <li><a href="list_vacancy.php">Vacancies</a></li>
       
          
           
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
<div class="container">
      <div class="row">



    <?php
        if(isset($message)) {
            echo '<div style="color:#fff; background-color: #008000; text-align: center;">'.$message.'</div>' ;
        }
    ?>

    <?php
        if(isset($_GET['vacancy_id']) && strlen($_GET['vacancy_id'])>0 ){
            $result = $conn->query('select * from vacancies where id='.$_GET['vacancy_id']);
            $row = $result->fetch_assoc();
            echo '<h3><strong style="color: #0A84CB">Job title:</strong> ' . $row['job_title'] . '</h3><br/>';
            echo '<h4><strong style="color: #0A84CB">Job role: </strong>' . $row['job_role'] . '</h4><br/>';
            echo '<h4><strong style="color: #0A84CB">Employer name: </strong> ' . $row['employer_name'] . '</h4><br/>';
            echo '<h4><strong style="color: #0A84CB">Job description: </strong>' . $row['job_description'] . '</h4><br/>';
            echo '<h4><strong style="color: #0A84CB">Contact number: </strong>' . $row['contact_number'] . '</h4><br/>';
            echo '<h4><strong style="color: #0A84CB">Whatsapp number: </strong>' . $row['whatsapp_number'] . '</h4><br/>';
            echo '<h4><strong style="color: #0A84CB">Date posted: </strong>' . $row['date_post'] . '</h4><br/>';

            if(isset($user_id)){
                $result = $conn->query('SELECT * FROM `applications` WHERE `user_id`='.$user_id.' AND `vacancy_id`='.$_GET['vacancy_id']);
               if($result->num_rows > 0) {
                    echo '<input type="button" disabled="" class="konnect-submit" name="" value="Already applied">';
                }
                else {
                    echo '<form method="POST" action=""><input type="hidden" name="vacancy" value="'.$_GET['vacancy_id'].'" /><input  type="submit" class="konnect-submit" value="Apply" /></form>';
                }
            }
            else {
                echo "<button>Login to Apply</button>";
            }
            
        }
        else {
            header("Location: list_vacancy.php");
        }
    ?>
   
</div>
</div>
<br/>
<br/>
<br/>
<!--Call To Action-->
<aside class="dark-bg">
  <div class="container text-center">
    <div class="row">
      <div class="col-12 text-center text-white">
        <h3 class="margin-0">Want to Get in Touch with us <a href="registration.php" class="konnect-button-3">Submit Your Query</a></h3>
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
      <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/location.png" alt="icon" class="konnect-contact-icon">
        <h3>Our <span class="color-default">Location</span></h3>
        <p>55/558 2nd floor Moins Building, Near Manorama Junction<br>
          Panampilly Nagar Pin: 682036</p>
      </div>

      
      <!--     Phone Numbers-->
      <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/phone.png" alt="icon" class="konnect-contact-icon">
        <h3>Phone <span class="color-default">Contact</span></h3>
        <p>9544773656<br>
          9544778622<br>
          9037735602</p>
      </div>
      
      <!-- Email Details -->
      <div class="col-md-3 col-sm-6 footer-box"> <img src="img/icons/email.png" alt="icon" class="konnect-contact-icon">
        <h3>Email <span class="color-default">Us</span></h3>
        <p>jolijobs4you@gmail.com
         
      </div>
    </div>
  </div>
</section>
<!--Back To Top--> 
<span id="back-to-top" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span><!--Main Footer-->

<footer class="konnect-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-left"> 
        
        <!--Footer Social Icons-->
        <div class="contact-social">
          <p> <a href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"target="blank"> <i class="fa fa-facebook"></i> </a>   <a href="https://www.instagram.com/jolijobs.c/"> <i class="fa fa-instagram"></i> </a></p>
        </div>
      </div>
      
      <!-- Footer Copy rights-->
      <div class="col-sm-6 text-right">
        <p> &copy;2019 All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<a target="_blank" style="position:fixed; bottom: 10px; right:10px;z-index:999" href="#" rel="nofollow"></a>
</body>
</html>