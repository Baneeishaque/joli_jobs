<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,800" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 450px; /* Full width */
  height: 300px; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: white;
  padding-top: 50px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0px 0px 200px 60px rgba(0, 0, 0, 0.7);
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;

}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
</head>
<body>
	<?php
		include_once('header.php');
		if(isset($_SESSION['error'])) {
			$error = $_SESSION['error'];
			(!$error['status']) ? ($color = "green") : ($color = "red");
			echo '<div style="color: #fff; background-color: #FF0000; text-align: center; ">' . $error['message'] . '</div>';
			unset($_SESSION['error']);
		}

		if($_GET['page']=='users') {
		$result = $conn->query("SELECT * FROM users");
		echo '<center><h2>Users</h2></center>';
		if($result->num_rows > 0) {
	?>
	<table class="users-table">
		<tr class="header"><td>no. </td><td>f. name</td><td>email</td><td>phone</td><td>payment</td><td>action</td></tr>
	<?php
			$counter = 1;
			while($row = $result->fetch_assoc()){
				echo "<tr><td>" . $counter++ . "</td><td>" . $row['first_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . '</td><td>' . $row['payment'] . '</td> <td class="action-cell"><div class="box"><div class="btn delete-btn popup_button" direct=action.php?action=delete&page=users&id=' . $row['id'] . '></div></div></td></tr>';
					}
		}	else {
			echo "no users to list";
		}
		} elseif($_GET['page']=='vacancies'){
			$result = $conn->query("SELECT * FROM vacancies");
			echo '<center><h2>Vacancies</h2></center>';
			if($result->num_rows > 0) {
		?>
		<table class="users-table" >
			<tr class="header"><td>no.</td><td>employer</td><td>job</td><td>phone</td><td>date</td><td>action</td></tr>
		<?php
				$counter = 1;
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $counter++ . "</td><td>" . $row['employer_name'] . "</td><td>" . $row['job_role'] . "</td><td>" . $row['contact_number'] . '</td><td>' . $row['date_post'] . '</td><td class="action-cell"><div class="box"><div class="btn delete-btn popup_button" direct=action.php?action=delete&page=vacancies&id=' . $row['id'] . '></div></div>&nbsp;<a style="text-decoration:  none; color:#0D6496" class="logout-btn" href="list.php?page=applications&id=' . $row['id'] . '" >Application</a></td></tr>';
				}
			}	else {
				echo "no vacancies to list";
			}
		} elseif($_GET['page']=='categories'){
			$result = $conn->query("SELECT * FROM categories");
			echo '<center><h2>Vacancy Categories</h2></center>';
			if($result->num_rows > 0) {
		?>
		<table class="users-table">
			<tr class="header"><td>no.</td><td>category</td><td>action</td></tr>
			
		<?php
				$counter = 1;
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $counter++ . "</td><td>" . $row['name'] . '</td><td class="action-cell" ><div class="box" > <div class="btn delete-btn popup_button" direct=action.php?action=delete&page=categories&id=' . $row['id'] . '  ></div></div></td></tr>';
						}
			}	else {
				echo "no vacancy categories to list";
			} 
		} elseif($_GET['page']=='applications'){
			$result = $conn->query('select * from vacancies where id='.$_GET['id']);
			$row = $result->fetch_assoc();
			echo '<h3><strong style=" margin-left:100px; color: #0A84CB"  >job title:</strong> ' . $row['job_title'] . '</h3>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">job role: </strong>' . $row['job_role'] . '</h4>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">employer name: </strong>' . $row['employer_name'] . '</h4>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">job description: </strong>' . $row['job_description'] . '</h4>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">contact number: </strong>' . $row['contact_number'] . '</h4>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">whatsapp number: </strong>' . $row['whatsapp_number'] . '</h4>';
			echo '<h4><strong style="margin-left:100px; color: #0A84CB">date posted: </strong>' . $row['date_post'] . '</h4><br/>';
			$result = $conn->query('select applications.date, users.email, users.first_name, users.phone, users.payment from applications inner join users on users.id = applications.user_id and applications.vacancy_id='.$_GET['id']);
			echo '<center><h2>Applied Users</h2></center>';
			if($result->num_rows > 0) {
		?>
		<table class="users-table">
			<tr class="header"><td>no.</td><td>name</td><td>email</td><td>number</td><td>payment</td><td>date</td></tr>
		<?php
				$counter = 1;
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $counter++ . "</td><td>" . $row['first_name'] . '</td><td>' . $row['email'] . '</td><td>'. $row['phone'] .'</td><td>'. $row['payment'] .'</td><td>'. $row['date'] .'</td></tr>';
						}
			}	else {
				echo "no vacancy categories to list";
			}
		}

	?>
	<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form  action="/action_page.php">
    <div class="container">
      <h1>Delete</h1>
      <p>Are you sure you want to delete ?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <a id="modal_delete"><button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button></a>
      </div>
    </div>
  </form>
</div>
	</table>
<script type="text/javascript">
	$(document).ready(function() {
		$(".popup_button").click(function() {
			$("#modal_delete").attr("href", $(this).attr("direct"));
			$("#id01").fadeIn(500);
		})
	})
</script>
</body>
</html>	
