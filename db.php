<?php

$server = "localhost";
$server_user = "root";
$server_pass = "lockit";
$server_db = "j_jobs";

$conn = new mysqli($server, $server_user, $server_pass, $server_db);
if($conn->connect_error) {
	die("connection failure" . $conn->connect_error);
}

?>
