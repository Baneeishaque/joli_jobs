<?php

$cpanel_username="ssquareq";
$cpanel_username_suffix="_";

$server = "localhost";
$server_user = $cpanel_username.$cpanel_username_suffix."dotlocus";
$server_pass = "aA9895204814";
$server_db = $cpanel_username.$cpanel_username_suffix."jolijobs";

$conn = new mysqli($server, $server_user, $server_pass, $server_db);
if($conn->connect_error) {

	die("connection failure" . $conn->connect_error);
}
