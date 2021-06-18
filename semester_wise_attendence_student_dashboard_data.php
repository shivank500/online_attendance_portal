<?php
session_start();
if(!isset($_POST['stusem']))
	header("location:login.php");


include("dbconnection.php");


$email = $_SESSION['email'];
$seme = $_POST['seme'];


$_SESSION['seme']=  $seme;
$_SESSION['email']=  $email;
	  
header("location:semester_wise_attendence_student_dashboard.php");	

?>