<?php
session_start();

//if(!isset($_POST['seacrch']))
	//header("location:login.php");


include("dbconnection.php");


$_SESSION['fs'] = $_POST['fs'];
$_SESSION['sem'] = $_POST['sem'];
$_SESSION['branch'] = $_POST['branch'];
$_SESSION['sec'] = $_POST['sec'];
$_SESSION['lecture'] = $_POST['lecture'];
$_SESSION['datess'] = $_POST['datess'];

//echo $_SESSION['fs'];
//echo $_SESSION['sem'];
//echo $_SESSION['lecture'];
//echo "pp";

header("location:take_attendance.php");

?>