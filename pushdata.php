<?php
// Start the session
session_start();

include_once('db.php');


if(isset($_POST['submit'])) {

  $email=$_POST['email'];
  $password=$_POST['password'];
  $password=md5($password);
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $education=$_POST['educational_qualification'];
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $age=$_POST['age'];
  $mobile=$_POST['mobile'];
  $payment=$_POST['payment'];


  if(isset($_FILES["resume"])){
    $target_dir = "uploads/";
    $file_name = $_FILES["resume"]["name"];
    $tmp = explode(".", $file_name);
    $ext = end($tmp);
    $target_file = $target_dir.$mobile.'.'.$ext;
    $resume = $target_file;
    move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file);
  }
  else {
    $resume = '';
  }

  

  $user_reg_data = array(
    'mail' => $email,
    'password' => $password,
    'gender' => $gender,
    'address' => $address,
    'education' => $education,
    'name' => $name,
    'dob' => $dob,
    'age' => $age,
    'mobile' => $mobile,
    'resume' => $resume,
    'payment' => $payment
  );
  
  // $sql="insert into registration(about_me,email,password,sponsor_type,sponsor_name,gender,present_address,permanent_address,educational_qualification,name,name_father,dob,age,marriage,religion,telephone,mobile,resume,technical_qualification,eng_strength,hin_strength,mal_strength,eng_post_applied,hin_post_applied,mal_post_applied,eng_experience,hin_experience,mal_experience,eng_salary,hin_salary,mal_salary)value('$about_me','$email','$password','$sponsor_type','$sponsor_name','$gender','$present_address','$permanent_address','$educational_qualification','$name','$name_father','$dob','$age','$marriage','$religion','$telephone','$mobile','$resume','$technical_qualification','$eng_strength','$hin_strength','$mal_strength','$eng_post_applied','$hin_post_applied','$mal_post_applied','$eng_experience','$hin_experience','$mal_experience','$eng_salary','$hin_salary','$mal_salary')";
  // mysqli_query($conn,$sql);


  $_SESSION["temp_user_reg"] = $user_reg_data;
  header("Location: make_payment.php");
  exit();
}
?>