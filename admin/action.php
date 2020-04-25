<?php
session_start();
include_once('db.php');

if(isset($_POST['logout'])){
    session_unset('admin_in');
    session_destroy();
    header("Location: login.php");
}

function deleteRow($conn, $table, $id) {
	$sql = "DELETE FROM $table WHERE id='$id'";
	if($conn->query($sql) === TRUE) {
		$error = array();
		$error['status'] = False;
		$error['message'] = 'Entry deleted successfully';
		$_SESSION['error'] = $error;
	} else {
		$error = array();
		$error['status'] = True;
		$error['message'] = 'Entry deletion failed';
		$_SESSION['error'] = $error;
	}
	if($table=='users') {
		$sql = 'DELETE FROM applications WHERE user_id='.$id;
	} elseif ($table=='vacancies') {
		$sql = 'DELETE FROM applications WHERE vacancy_id='.$id;
	}
	$conn->query($sql);

}

if($_GET['action']=='delete'){

	if($_GET['page']=='users') {
		deleteRow($conn, 'users', $_GET['id']);
		header("Location: list.php?page=users");
	}

	if($_GET['page']=='vacancies') {
		deleteRow($conn, 'vacancies', $_GET['id']);
		header("Location: list.php?page=vacancies");
	}

	if($_GET['page']=='categories') {
		deleteRow($conn, 'categories', $_GET['id']);
		header("Location: list.php?page=categories");
	}


	exit();
}


    header("Location: index.php");
?>
