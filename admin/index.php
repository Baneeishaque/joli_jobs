<?php
// Start the session
session_start();
if(isset($_SESSION["user"])){
    header("Location: dashboard.php");
}
?>


<?php
include_once('conn.php');
$error=''; //Variable to Store error message;
if(isset($_POST['login'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['username'];
 $pass=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 //Selecting Database
 $db = mysqli_select_db($conn, "joli_jobs");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM login WHERE password='$pass' AND username='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
    $row = $query -> fetch_row();
    $_SESSION["user"] = $row[0];
    header("Location: dashboard.php"); // Redirecting to other page
 }
 else
 {
//  echo "Username or Password is Invalid";
    echo "<script>alert('Invalide username or password');</script>";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>

<html>

<head>
    <title>Joli-jobs | admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,800" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="top-nav-bar">
        <div class="heading-container">Joli Jobs Admin</div>
        <div class="top-nav-right-container">
        </div>
    </div>

    <div id="signup-container-main" class="signup-container-main">
        <br />
        <div class="signup-container">
            <form name="admin" method="post" action="" enctype="multipart/form-data">
            <table class="signup-table">
                <tr class="signup-row">
                    <td class="signup-column">
                        <h2>
                            Login
                        </h2>
                    </td>
                </tr>
                <tr class="signup-row">
                    <td class="signup-column">
                        <div class="signup-user-container">
                            <input type="text" class="signup-name" name="username" placeholder="username" />
                            <div class="signup-user-icon"></div>
                        </div>
                    </td>
                </tr>
                <tr class="signup-row">
                    <td class="signup-column">
                        <div class="signup-user-container">
                            <input type="password" class="signup-name" name="password" placeholder="password" />
                            <div class="signup-pass-icon"></div>
                        </div>
                    </td>
                </tr>
                <tr class="signup-btn-row">
                    <td class="signup-btn-column">

                            <input type="submit" class="signup-btn" name="login" value="Login">
                        
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>

    <div class="footer-bar">
        <div class="footer-left">&copy; <span class="footer-bold">jolijobs</span> all rights reserved</div>
        <div class="footer-right">powered by <span class="footer-bold">Alkhidma developers</span></div>
    </div>
</body>

</html>