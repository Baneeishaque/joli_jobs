<?php
session_start();
if(empty($_SESSION["user"])){
    header("Location: index.php");
}
?>



<?php
include_once('conn.php');
$sql="select * from registration";
$b= mysqli_query($conn,$sql);




if(isset($_GET["deleteId"])){
    $delId = $_GET["deleteId"];

    $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM registration WHERE id='$delId'"));
    if($rows>0) {
        $sql = "DELETE FROM registration WHERE id='$delId'";
        if (mysqli_query($conn, $sql)) {
            header("Refresh:0");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}
?>

<html>

<head>
    <title>Joli-jobs | admin | users</title>
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
        <div class="header"><a style="text-decoration: none; color: #FFFFFF;" href="dashboard.php">all users</a></div>
        <a href="index.html">
            <a style="text-decoration: none;" href="logout.php"><div class="logout-btn">logout</div></a>
        </a>
    </div>

    <table class="users-table">
        <tr class="header">
            <td>Sl.No</td>
            <td>About</td>
            <td>email</td>
            <td>Sponsor Type</td>
            <td>Sponsor Name</td>
            <td>Gender</td>
            <td>Present Address</td>
            <td>Permanent Address</td>
            <td>Educational Qualification</td>
            <td>Name</td>
            <td>Father Name</td>
            <td>DOB</td>
            <td>Age</td>
            <td>Marriage</td>
            <td>Religion</td>
            <td>Telephone</td>
            <td>Mobile</td>
            <td>Resume</td>
            <td>Technical Qualification</td>
            <td>English Strength</td>
            <td>Hindi Strength</td>
            <td>Malayalam Strength</td>
            <td>English Post Application</td>
            <td>Hindi Post Application</td>
            <td>Malayalam Post Application</td>
            <td>English Experience</td>
            <td>Hindi Experience</td>
            <td>Malayalam Experience</td>
            <td>English salary</td>
            <td>Hindi salary</td>
            <td>Malayalam salary</td>
            <td>Action</td>
        </tr>

        <?php
        while ($fetch=mysqli_fetch_array($b)) 
        {
        ?>

        <tr>
            <td><?php echo $fetch['id'] ?></td>
            <td><?php echo $fetch['about_me'] ?></td>
            <td><?php echo $fetch['email'] ?></td>
            <td><?php echo $fetch['sponsor_type'] ?></td>
            <td><?php echo $fetch['sponsor_name'] ?></td>
            <td><?php echo $fetch['gender'] ?></td>
            <td><?php echo $fetch['present_address'] ?></td>
            <td><?php echo $fetch['permanent_address'] ?></td>
            <td><?php echo $fetch['educational_qualification'] ?></td>
            <td><?php echo $fetch['name'] ?></td>
            <td><?php echo $fetch['name_father'] ?></td>
            <td><?php echo $fetch['dob'] ?></td>
            <td><?php echo $fetch['age'] ?></td>
            <td><?php echo $fetch['marriage'] ?></td>
            <td><?php echo $fetch['religion'] ?></td>
            <td><?php echo $fetch['telephone'] ?></td>
            <td><?php echo $fetch['mobile'] ?></td>
            <td><?php echo $fetch['resume'] ?></td>
            <td><?php echo $fetch['technical_qualification'] ?></td>
            <td><?php echo $fetch['eng_strength'] ?></td>
            <td><?php echo $fetch['hin_strength'] ?></td>
            <td><?php echo $fetch['mal_strength'] ?></td>
            <td><?php echo $fetch['eng_post_applied'] ?></td>
            <td><?php echo $fetch['hin_post_applied'] ?></td>
            <td><?php echo $fetch['mal_post_applied'] ?></td>
            <td><?php echo $fetch['eng_experience'] ?></td>
            <td><?php echo $fetch['hin_experience'] ?></td>
            <td><?php echo $fetch['mal_experience'] ?></td>
            <td><?php echo $fetch['eng_salary'] ?></td>
            <td><?php echo $fetch['hin_salary'] ?></td>
            <td><?php echo $fetch['mal_salary'] ?></td>
            <td class="action-cell"><div class="box"><div class="btn delete-btn" ><a href="users.php?deleteId=<?php echo $fetch['id']?> "><div class="btn delete-btn" ></div></a></div></div></td>
        </tr>
        
        <?php 
        }
        ?>
        
    </table>
    
</body>

</html>
<!--<td class="action-cell"><div class="box"><div class="btn delete-btn"></div></div><div class="box"><div class="btn edit-btn"></div></div></td>-->
