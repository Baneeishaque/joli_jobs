<?php
session_start();
if(empty($_SESSION["user"])){
    header("Location: index.php");
}
?>



<?php
include_once('conn.php');
$sql="select * from vacancy";
$b= mysqli_query($conn,$sql);


if(isset($_GET["deleteId"])){
    $delId = $_GET["deleteId"];

    $rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM vacancy WHERE id='$delId'"));
    if($rows>0) {
        $sql2 = "DELETE FROM vacancy WHERE id='$delId'";
        if (mysqli_query($conn, $sql2)) {
            header("Refresh:0");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    
    
}



?>
<html>

<head>
    <title>Joli-jobs | admin | vacancy</title>
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
        <div class="header"><a style="text-decoration: none; color: #FFFFFF;" href="dashboard.php">vacancies available</a></div>
        <a href="index.html">
            <a style="text-decoration: none;" href="logout.php"><div class="logout-btn">logout</div></a>
        </a>
    </div>

    <table class="users-table">
        <tr class="header">
            <td>company_address</td>
            <td>email</td>
            <td>mobile</td>
            <td>contact_person</td>
            <td>position</td>
            <td>office_phone</td>
            <td>residence</td>
            <td>post_vacancy_1</td>
            <td>number_of_vacancy_1</td>
            <td>gender_1</td>
            <td>experience_1</td>
            <td>working_time_1</td>
            <td>skill_required_1</td>
            <td>salary_offered_1</td>
            <td>location_1</td>
            <td>post_vacancy_2</td>
            <td>number_of_vacancy_2</td>
            <td>gender_2</td>
            <td>experience_2</td>
            <td>working_time_2</td>
            <td>skill_required_2</td>
            <td>salary_offered_2</td>
            <td>location_2</td>
            <td>post_vacancy_3</td>
            <td>number_of_vacancy_3</td>
            <td>gender_3</td>
            <td>experience_3</td>
            <td>working_time_3</td>
            <td>skill_required_3</td>
            <td>salary_offered_3</td>
            <td>location_3</td>
            <td>Action</td>
            
        </tr>
        <?php
        while ($fetch=mysqli_fetch_array($b)) 
        {
        ?>

        <tr>
            <td><?php echo $fetch['company_address'] ?></td>
            <td><?php echo $fetch['email'] ?></td>
            <td><?php echo $fetch['mobile'] ?></td>
            <td><?php echo $fetch['contact_person'] ?></td>
            <td><?php echo $fetch['position'] ?></td>
            <td><?php echo $fetch['office_phone'] ?></td>
            <td><?php echo $fetch['residence'] ?></td>
            <td><?php echo $fetch['post_vacancy_1'] ?></td>
            <td><?php echo $fetch['number_of_vacancy_1'] ?></td>
            <td><?php echo $fetch['gender_1'] ?></td>
            <td><?php echo $fetch['experience_1'] ?></td>
            <td><?php echo $fetch['working_time_1'] ?></td>
            <td><?php echo $fetch['skill_required_1'] ?></td>
            <td><?php echo $fetch['salary_offered_1'] ?></td>
            <td><?php echo $fetch['location_1'] ?></td>
            <td><?php echo $fetch['post_vacancy_2'] ?></td>
            <td><?php echo $fetch['number_of_vacancy_2'] ?></td>
            <td><?php echo $fetch['gender_2'] ?></td>
            <td><?php echo $fetch['experience_2'] ?></td>
            <td><?php echo $fetch['working_time_2'] ?></td>
            <td><?php echo $fetch['skill_required_2'] ?></td>
            <td><?php echo $fetch['salary_offered_2'] ?></td>
            <td><?php echo $fetch['location_2'] ?></td>
            <td><?php echo $fetch['post_vacancy_3'] ?></td>
            <td><?php echo $fetch['number_of_vacancy_3'] ?></td>
            <td><?php echo $fetch['gender_3'] ?></td>
            <td><?php echo $fetch['experience_3'] ?></td>
            <td><?php echo $fetch['working_time_3'] ?></td>
            <td><?php echo $fetch['skill_required_3'] ?></td>
            <td><?php echo $fetch['salary_offered_3'] ?></td>
            <td><?php echo $fetch['location_3'] ?></td>
            <td class="action-cell"><div class="box"><div class="btn delete-btn" ><a href="vacancy.php?deleteId=<?php echo $fetch['id']?> "><div class="btn delete-btn" ></div></a></div></div></td>
            <!-- <td class="action-cell"><div class="box"><div class="btn delete-btn"></div></div></td> -->
        </tr>
        <?php 
        }
        ?>
        
    </table>
    
</body>

</html>
<!--
company_address
email
mobile
contact_person
position
office_phone
residence
post_vacancy_1
number_of_vacancy_1
gender_1
experience_1
working_time_1
skill_required_1
salary_offered_1
location_1
post_vacancy_2
number_of_vacancy_2
gender_2
experience_2
working_time_2
skill_required_2
salary_offered_2
location_2
post_vacancy_3
number_of_vacancy_3
gender_3
experience_3
working_time_3
skill_required_3
salary_offered_3
location_3 -->