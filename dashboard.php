<?php
session_start();
if(empty($_SESSION["user"])){
    header("Location: index.php");
}
?>

<html>

<head>
    <title>Joli-jobs | admin | dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,800" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    
    <div class="top-nav-bar">
        <div class="header">joli jobs dashboard</div>
        <a href="index.html">
            <a style="text-decoration: none;" href="logout.php"><div class="logout-btn">logout</div></a>
        </a>
    </div>

    <div class="home-main-body-container">

        <div class="item">
            <a href="users.php">
                <div class="inner-body">
                    <img src="images/users.svg" class="image" alt="">
                    <div class="text">users</div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="vacancy.php">
                <div class="inner-body">
                    <img src="images/vacancy.svg" class="image" alt="">
                    <div class="text">vacancy</div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="applications.php">
                <div class="inner-body">
                    <img src="images/application.svg" class="image" alt="">
                    <div class="text">applications</div>
                </div>
            </a>
        </div>

    </div>
    
</body>

</html>