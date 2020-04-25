<?php
session_start();
if(!isset($_SESSION['admin_in'])){
    header("Location: login.php");
}
else {
include_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	
    <title>Joli-jobs | admin | dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

</body>
</html>
<div class="top-nav-bar">
        <div class="header"><a style="text-decoration: none; color: #FFFFFF;" href="index.php">HOME</a></div>
        <a href="index.html">
            <form action="action.php" method="POST">
                <input class="logout-btn" type="submit" value="logout" name="logout" />
            </form>
        </a>
    </div>
<?php
}
?>
