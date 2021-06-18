<?php
session_start();
if(!isset($_POST['sl']))
	header("location:login.php");

$username =  $_POST['username'];
$password = $_POST['password'];



include("dbconnection.php");

if($username=='Admin' and $password=='111')
{
	header("location:admin_dashboard.php");
}

else
{
	$sq = "select * from login_all where User_Name='$username' and Password='$password'";
	$rs = $con->query($sq);
	$row= $rs->fetch_array();

if($rs->num_rows)
{
	$_SESSION['email']= $username;
	
	if($row[2] =='student')
	{
		header("location:home_student_dashboard.php");
	}
	else if($row[2] =='staff')
	{
		header("location:home_staff_dashboard.php");
	}
	else if($row[2] =='hod')
	{
		header("location:home_hod_dashboard.php");
	}
}
else
{   
    $msg="Please Enter correct UserName and Password!!!!";
	$_SESSION['err']=$msg;
	header("location:login.php");
}
}

?>