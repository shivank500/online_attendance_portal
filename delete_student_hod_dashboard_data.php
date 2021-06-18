<?php
session_start();
if(!isset($_POST['seacrchingll']))
	header("location:login.php");

include("dbconnection.php");

$_SESSION['sem']=  $_POST['sem'];
$_SESSION['branch']=  $_POST['branch'];
$_SESSION['sec']=  $_POST['sec'];
$_SESSION['fs']=  $_POST['fs'];

header("location:delete_student_hod_dashboard.php");	

?>