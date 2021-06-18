<?php
session_start();
if(!isset($_POST['seacrch1']))
	header("location:login.php");


include("dbconnection.php");


$_SESSION['fs'] = $_POST['fs'];
$_SESSION['sem'] = $_POST['sem'];
$_SESSION['branch'] = $_POST['branch'];
$_SESSION['sec'] = $_POST['sec'];
$_SESSION['datesss']=  $_POST['datesss'];	 
$_SESSION['lecturesss']=  $_POST['lecturesss'];

//echo "kk";

//echo $_SESSION['fs'];
//echo $_SESSION['sem'];
//echo $_SESSION['lecture'];

header("location:update_attendance_staff_dashboard.php");	

?>