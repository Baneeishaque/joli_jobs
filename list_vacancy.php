<?php
    include_once('db.php');

    $categories = $conn->query("SELECT * FROM `categories`");
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy list</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link href="img/fav.png" rel="shortcut icon" type="image/x-icon"/>
    <!-- Bootstrap Core CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom icon Fonts -->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Animated CSS -->
<link href="css/animate.css" media="all" rel="stylesheet" type="text/css" />

<!-- Main CSS -->

<link href="css/default.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
 <style>
    .fasil {
      padding: 16px;
      background-color: #0D6496;
         
    }
  </style>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
    p, h4, a, li {
  font-family: 'Open Sans',sans-serif!important;
}
.box {
background: #f2f2f2;
border-radius: 4px;
padding: 1em 1em;
margin: 2em 0!important;
text-align: left;
}


h4, li {
font-weight: 300;
color: #07355C;
display: inline-block;
vertical-align: middle;
}

.button {
font-size: 1em!important;
padding: 5px 20px!important;
text-decoration: none;
-webkit-box-shadow: #0D6496 0 1px 0;
-moz-box-shadow: #0D6496 0 1px 0;
box-shadow: #0D6496 0 1px 0;
background-color: #0D6496;
background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0%,#f6ae2b),color-stop(70%,#f39d13));
background-image: -webkit-linear-gradient(#0D6496,#0D6496 70%);
background-image: -moz-linear-gradient(#0D6496,#0D6496 70%);
background-image: -o-linear-gradient(#0D6496,##0D6496 70%);
background-image: linear-grad;
padding-left: 0;
padding-right: 0;
text-align: center;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
border-radius: 3px;
padding: 10px 20px;
font-size: 18px;
border: none;
color: white;
display: inline-block;
vertical-align: middle;
margin-right:1em;
}

.box ul {
margin: 0;
padding: 0;
list-style-type: none;
}
 
.function
{
  display: block;
}

.box-col
{
  display: inline-block;
  vertical-align: middle;  
}

.text-right
{
  text-align:right;
}

.box-80
{
  width: 79%;
}

.box-20
{
  width: 20%;
}


    </style>
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
            <li><a href="logout.php">Logout</a></li>
          
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Banner -->
<header class="innner-page">
  <div class="container">
    <h1><i class="fa fa-angle-double-right" aria-hidden="true"></i> Current Jobs</h1>
  </div>
</header>


<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-dark"> 
        <!--Heading-->
        <h2 class="section-heading text-dark">Apply for <span>Suitable Job Profile</span></h2>
        
        <div class="konnect-space"></div>
      </div>
    </div>
  </div>   
<div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-left: -2%;">
    <div>
        <center>
        <form action="" method="GET">

            
            <?php
            if($categories->num_rows > 0){
                echo '<div class="col-md-2" style="margin-left:10%;"><select data-filter="price" class="filter-price filter form-control" name="category"><option value="">all</option>';
                while($row = $categories->fetch_assoc()){
                    ?>
                    
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php 
                }
                echo '</select> </div>';
            } 
            ?>
            <input  type="submit" value="filter" class="btn btn-block btn-primary" style="width: 70px; margin-right: 70%; background-color: #3e7b54;">
        </form></center>
    </div>
</div></div>

    <?php
        if(isset($_GET['category'])) {
            if(strlen($_GET['category'])==0) {
                unset($_GET['category']);
            }
            else {
                $cat_name_query = $conn->query("SELECT * FROM `categories` WHERE `id`=".$_GET['category']);
                $cat_name = $cat_name_query->fetch_assoc()['name'];
                echo "<br/><br/><br/>Listing for categories: <h3>".$cat_name."</h3>";
            }
        }
    ?>
    
        <?php
            if(isset($_GET['page_num'])) {
                $page = $_GET['page_num']*10;
            } else {
                $page = 0;
            }
            if(isset($_GET['category']) && strlen($_GET['category'])>0) {
                $cat_query = "WHERE `category`=".$_GET['category'];
            } else {
                $cat_query = '';
            }
            $result = $conn->query("SELECT * FROM vacancies ".$cat_query." ORDER BY `id` DESC LIMIT ".$page.",".($page+10));
			echo '<h2 style="text-align: center;">VACANCIES</h2>';
			if($result->num_rows > 0) {
		?>    
    </center>
		<table class="users-table">
			<tr class="header"> <td>no.</td><td>employer</td><td>job</td><td>phone</td><td>date</td><td>action</td></tr>
		<?php
				$counter = 1;
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $counter++ . "</td><td>" . $row['employer_name'] . "</td><td>" . $row['job_role'] . "</td><td>" . $row['contact_number'] . '</td><td>' . $row['date_post'] . '</td><td><a href="apply.php?vacancy_id=' . $row['id'] . '">Apply</a></td></tr>';
				}
			}	else {
				echo "no vacancies to list";
			}
        ?>
        </table>
        
        
        <br/>
        <center>
        
        <ul class="pagination">
        <?php
        $main_query = "SELECT * FROM vacancies";
        if(isset($_GET['category']) && strlen($_GET['category'])>0){
            $main_query = $main_query." WHERE `category`=".$_GET['category'];
        }
        $result = $conn->query($main_query);
            $total_length = $result->num_rows;
            $page_length = ceil($total_length/10);
            for($i=0; $i<$page_length; $i++) {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $url = strtok($actual_link, '?');
                $new_url = $url.'?page_num='.$i;
                if(isset($_GET['category']) && strlen($_GET['category'])>0) {
                    $new_url = $new_url.'&category='.$_GET['category'];
                }
                echo '&nbsp; <li><a href="'.$new_url.'">'.($i+1).'</a></li>&nbsp;';
            }
        ?>
    </ul></center>
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