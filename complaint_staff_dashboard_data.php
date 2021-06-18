<?php
session_start();
if(!isset($_POST['comstaff']))
	header("location:login.php");


include("dbconnection.php");

$email = $_SESSION['email'];


$_SESSION['email']=  $email;
$_SESSION['sem']=  $_POST['sem'];
$_SESSION['branch']=  $_POST['branch'];
$_SESSION['sec']=  $_POST['sec'];
$_SESSION['fs']=  $_POST['fs'];
	  
header("location:comlpaint_staff_dashboard.php");	

?>