<?php
session_start();
if(!isset($_POST['viesstus']))
	header("location:login.php");

include("dbconnection.php");

$_SESSION['fs'] = $_POST['fs'];
$_SESSION['sem'] = $_POST['sem'];
$_SESSION['branch'] = $_POST['branch'];
$_SESSION['sec'] = $_POST['sec'];

//echo $_SESSION['fs'];
//echo $_SESSION['sem'];
//echo $_SESSION['lecture'];
//echo "pp";

header("location:views_student_staff_dashboard.php");

?>