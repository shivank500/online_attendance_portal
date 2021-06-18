<?php
session_start();
if(!isset($_POST['add_hod']))
	header("location:login.php");

include("dbconnection.php");

$hodname = $_POST['hodname'];
$hodemail = $_POST['hodemail'];
$hodcn = $_POST['hodcn'];
$hodid = $_POST['hodid'];
$dprt = $_POST['dprt'];

$sq = "insert into hod values('$hodname','$hodemail',$hodcn,'$hodid','$dprt')";

/*
echo $dprt;
echo $hodname;
echo $hodemail;
echo $hodcn;
die;
*/
if($con->query($sq))
{
	   $s1= "insert into login_all values('$hodemail','$hodcn','hod')";	
       $con->query($s1); 
	   //echo $hodemail;
       $_SESSION['hodemail']=  $hodemail;	
	   //header("location:student_dashboard.php");	
	   echo '<script>alert("ADD HOD Successfull")</script>';
       echo '<script>window.location.href="admin_dashboard.php";</script>';
}
else
{
	echo '<script>alert("HOD Not ADD Successfull")</script>';
}

?>