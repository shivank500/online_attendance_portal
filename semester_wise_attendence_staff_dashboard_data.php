<?php
session_start();
if(!isset($_POST['stasem']))
	header("location:login.php");


include("dbconnection.php");

$email = $_SESSION['email'];

$_SESSION['email']=  $email;
$_SESSION['sec']=  $_POST['sec'];
$_SESSION['sem']=  $_POST['sem'];
$_SESSION['branch']=  $_POST['branch'];
$_SESSION['fs']=  $_POST['fs'];
	  
header("location:semester_wise_attendence_staff_dashboard.php");	

?>