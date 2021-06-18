<?php
session_start();
if(!isset($_POST['upd_hod']))
	header("location:login.php");

include("dbconnection.php");

$hodemail = $_POST['hodemail'];


//echo $hodemail;
//echo $hodid;

//die;

$_SESSION['hodemail']=  $hodemail;	
header("location:update_hod_admin_dashboard.php");	 

?>