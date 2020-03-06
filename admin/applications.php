<?php
session_start();
if(empty($_SESSION["user"])){
    header("Location: index.php");
}
?>

<?php
include_once('conn.php');
$sql="select * from apply_vacancy";
$b= mysqli_query($conn,$sql);



if(isset($_GET["deleteId"])){
    $delId = $_GET["deleteId"];

    $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM apply_vacancy WHERE id='$delId'"));
    if($rows>0) {
        $sql = "DELETE FROM apply_vacancy WHERE id='$delId'";
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
    <title>Joli-jobs | admin | applications</title>
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
        <div class="header"><a style="text-decoration: none; color: #FFFFFF;" href="dashboard.php">all applications</a></div>
        <a href="index.html">
            <a style="text-decoration: none;" href="logout.php"><div class="logout-btn">logout</div></a>
        </a>
    </div>

    <table class="users-table">
        <tr class="header">
            <td>Sl.No</td>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Qualification & Experience</td>
            <td>Job</td>
            <td>Resume</td>
            <td>Address</td>
            <td>Age</td>
            <td>Post</td>
            <td>Pincode</td>
            <td>Comment</td>
            <td>Telephone</td>
            <td>Actions</td>
        </tr>
        <?php
        while ($fetch=mysqli_fetch_array($b)) 
        {
        ?>

        <tr>
            <td><?php echo $fetch['id'] ?></td>
            <td><?php echo $fetch['name'] ?></td>
            <td><?php echo $fetch['email'] ?></td>
            <td><?php echo $fetch['mobile'] ?></td>
            <td><?php echo $fetch['qualification'] ?></td>
            <td><?php echo $fetch['job'] ?></td>
            <td><?php echo $fetch['resume'] ?></td>
            <td><?php echo $fetch['address'] ?></td>
            <td><?php echo $fetch['age'] ?></td>
            <td><?php echo $fetch['post'] ?></td>
            <td><?php echo $fetch['pincode'] ?></td>
            <td><?php echo $fetch['comment'] ?></td>
            <td><?php echo $fetch['telephone'] ?></td>
            <td class="action-cell"><div class="box"><div class="btn delete-btn" ><a href="applications.php?deleteId=<?php echo $fetch['id']?> "><div class="btn delete-btn" ></div></a></div></div></td>
            
        </tr>
        <?php 
        }
        ?>
        
    </table>
    
</body>

</html>