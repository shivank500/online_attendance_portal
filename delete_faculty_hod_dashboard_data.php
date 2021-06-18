<?php
session_start();
if(!isset($_POST['def']))
	header("location:login.php");

include("dbconnection.php");

$facemail = $_POST['facemail'];
$facid = $_POST['facid'];

$sq = "DELETE FROM staff WHERE (Email='$facemail' and Employ_ID='$facid')";

//echo $hodemail;
//echo $hodid;

//die;

if($con->query($sq)==TRUE)
{
	   $sq1 = "DELETE FROM login_all WHERE User_Name='$facemail'";
	   $con->query($sq1); 
	   echo '<script>alert("Delete Successfull")</script>';
       echo '<script>window.location.href="home_hod_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Not Delete Successfull")</script>';
	echo $con->error;
}

?>