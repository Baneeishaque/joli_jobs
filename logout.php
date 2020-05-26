<?php

session_start();

if (isset($_SESSION['user_in'])) {
    unset($_SESSION["user_in"]);
    session_unset('user_in');
    session_destroy();
    header("Location: index.php");
}

?>
