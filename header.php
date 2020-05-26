<?php
session_start();

include_once('db.php');
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
    <title>joli-jobs-registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom icon Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Animated CSS -->
    <link href="css/animate.css" media="all" rel="stylesheet" type="text/css"/>

    <!-- Main CSS -->

    <link href="css/default.css" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css" type="text/css"/>


</head>

<!-- Body -->

<body>


<!-- Top Bar  -->
<div class="konnect-info">
    <div class="container">
        <div class="row">
            <!-- Top bar Left -->
            <div class="col-md-6 col-sm-8 hidden-xs">
                <ul>
                    <li><i class="fa fa-paper-plane" aria-hidden="true"></i> jolijobs4you@gmail.com</li>
                    <li class="li-last"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>9544773656</li>
                </ul>
            </div>
            <!-- Top bar Right -->
            <div class="col-md-6 col-sm-4">
                <ul class="konnect-float-right">
                    <li class="li-last"><a target="_blank"
                                           href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"
                                           target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a
                                href="https://www.instagram.com/jolijobs.c/"> <i class="fa fa-instagram"></i> </a></li>
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
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <i
                        class="fa fa-bars" aria-hidden="true"></i></button>
            <!-- Logo -->
            <a class="navbar-brand page-scroll logo-color" href="index.html"><img src="img/logo.png" alt="logo"
                                                                                  width="162"></a></div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="add_vacancy.php">Post Your Vacancy</a></li>
                <li><a href="list_vacancy.php">Vacancies</a></li>


                <li><a href="contact.php">Contact Us</a></li>
                <?php

                if (isset($_SESSION['user_in'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }

                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Banner -->
