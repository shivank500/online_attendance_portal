<?php
session_start();
if(!isset($_POST['eupd_hod']))
	header("location:login.php");


include("dbconnection.php");


$ehodcn = $_POST['ehodcn'];
$ehodid = $_POST['ehodid'];
$edprt = $_POST['edprt'];
$eemail = $_POST['eemail'];

//echo $udates;
//echo $ulecture;

//die;

	$sq = "UPDATE hod SET Mobile_no='$ehodcn' , Employee_ID='$ehodid' , Department='$edprt' where Email='$eemail'";
	
if($con->query($sq))
{
	$sq1 = "UPDATE login_all SET Password='$ehodcn' where User_Name='$eemail'";
	$con->query($sq1);
echo '<script>alert("Updated Successfully")</script>';
echo '<script>window.location.href="admin_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Not Updated Successfully")</script>';
}
?>