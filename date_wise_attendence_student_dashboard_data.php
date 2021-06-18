<?php
session_start();
if(!isset($_POST['studa']))
	header("location:login.php");

include("dbconnection.php");



$email = $_SESSION['email'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];


$_SESSION['date1']=  $date1;
$_SESSION['date2']=  $date2;	 

header("location:date_wise_attendence_student_dashboard.php");	

?>