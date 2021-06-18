<?php
session_start();

if(!isset($_POST['today']))
	header("location:login.php");


include("dbconnection.php");


$_SESSION['fs'] = $_POST['fs'];
$_SESSION['sem'] = $_POST['sem'];
$_SESSION['branch'] = $_POST['branch'];
$_SESSION['sec'] = $_POST['sec'];
$_SESSION['lecture'] = $_POST['lecture'];

//echo $_SESSION['fs'];
//echo $_SESSION['sem'];
//echo $_SESSION['lecture'];
//echo "pp";

header("location:todaysattendence_staff_dashboard.php");

?>