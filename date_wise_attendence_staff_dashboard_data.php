<?php
session_start();
if(!isset($_POST['stada']))
	header("location:login.php");


include("dbconnection.php");


$_SESSION['date1']=  $_POST['date1'];
$_SESSION['date2']=  $_POST['date2'];	 
$_SESSION['sem']=  $_POST['sem'];
$_SESSION['branch']=  $_POST['branch'];
$_SESSION['sec']=  $_POST['sec'];
$_SESSION['fs']=  $_POST['fs'];
$_SESSION['lecture'] = $_POST['lecture'];


header("location:date_wise_attendence_staff_dashboard.php");	

?>