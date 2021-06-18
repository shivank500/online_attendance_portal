<?php
session_start();
if(!isset($_POST['del_hod']))
	header("location:login.php");

include("dbconnection.php");

$hodemail = $_POST['hodemail'];
$hodid = $_POST['hodid'];

$sq = "DELETE FROM hod WHERE (Email='$hodemail' and Employee_ID='$hodid')";

//echo $hodemail;
//echo $hodid;

//die;

if($con->query($sq)==TRUE)
{
	   $sq1 = "DELETE FROM login_all WHERE User_Name='$hodemail'";
	   $con->query($sq1); 
	   echo '<script>alert("Delete Successfull")</script>';
       echo '<script>window.location.href="admin_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Not Delete Successfull")</script>';
	//echo $con->error;
}

?>