<?php
$a=mysqli_connect("localhost","root","","joli_jobs");
$applyId = $_GET["applyId"];

$sql = "SELECT FROM vacancy WHERE id='$applyId'";

$b= mysqli_query($a,$sql);


$fetch=mysqli_fetch_array($b);

    
    

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $qualification=$_POST['qualification'];
  $job=$_POST['job'];
  $district=$_POST['district'];
  $resume=$_POST['resume'];
  $address=$_POST['address'];
  $age=$_POST['age'];
  $post=$_POST['post'];
  $pincode=$_POST['pincode'];
  $comment=$_POST['comment'];
  $telephone=$_POST['telephone'];

  $sqla="insert into apply_vacancy(name,email,mobile,qualification,job,district,resume,address,age,post,pincode,comment,telephone)value('$name','$email','$mobile','$qualification','$job', '$district' ,'$resume','$address','$age','$post','$pincode','$comment','$telephone')";
  mysqli_query($a,$sqla);
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
<link href="img/fav.png" rel="shortcut icon" type="image/x-icon"/>

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
          <li class="li-last"> <a target="_blank" href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"> <i class="fa fa-instagram"></i> </a></li>
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
        <h4><strong style="color: #0A84CB">Code:</strong> <?php echo $fetch['id'] ?></h4>
  
          <h4><strong style="color: #0A84CB">Post:</strong> <?php echo $fetch['post_vacancy_1'] ?></h4>
       
          <h4><strong style="color: #0A84CB">Company:</strong><?php echo $fetch['tittle'] ?> </h4>
          <h4><strong style="color: #0A84CB">Location:</strong> <?php echo $fetch['company_address'] ?></h4>
           
        <div class="konnect-space"></div>
      </div>
    </div>
    <!-- Submit Application-->
    <form class="konnect-form" id="contactForm" method="post" >
      <div class="row">
        <div class="col-md-6">
            
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your E-Mail" required>
            <input type="text" class="form-control" id="phone" name="mobile" placeholder="Mobile" required>
            <textarea class="form-control" id="comment" name="qualification" placeholder="Qualification&Experience" required></textarea>
            <input type="text" class="form-control" id="phone" name="job" placeholder="job/post" required>
            <input type="text" class="form-control" id="phone" name="district" placeholder="District" required>
             <span class="btn btn-file" > Upload Your Resume
          <input name="resume" required type="file">
          </span>
        </div>
        <div class="col-md-6">
            <textarea class="form-control" id="comment" name="address" placeholder="Address..." required></textarea>
          
          <input type="text" class="form-control" id="phone" name="age" placeholder="Age" required>
          <input type="text" class="form-control" id="phone" name="post" placeholder="Post Office " required>
          <input type="text" class="form-control" id="phone" name="pincode" placeholder="pincode.." required>
          <textarea class="form-control" id="comment" name="comment" placeholder="Comments" required></textarea>
          <input type="text" class="form-control" id="phone" name="telephone" placeholder="Telephone" required></div>
          
          
      </div>
        
        
      <div class="row">
        <div class="col-md-12">
          <button type="submit" name="submit" class="konnect-submit">Submit</button>
           
            
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
          <p> <a href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"target="blank"> <i class="fa fa-facebook"></i> </a>   <a href="#"> <i class="fa fa-instagram"></i> </a></p>
        </div>
      </div>
      
      <!-- Footer Copy rights-->
      <div class="col-sm-6 text-right">
        <p> &copy;2019 All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<a target="_blank" style="position:fixed; bottom: 10px; right:10px;z-index:999" href="http://www.konnectplugins.com/template/recruit-plus-staffing-and-recruiting-wordpress-theme/" rel="nofollow"></a>
<!-- jQuery --> 

<script src="assets/jquery/jquery.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 

<!-- Theme JavaScript --> 
<script src="js/default.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77800499-1', 'auto');
  ga('send', 'pageview');

</script></body>


</html>