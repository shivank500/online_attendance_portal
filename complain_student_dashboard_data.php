<?php
session_start();
if(!isset($_POST['complain_student']))
	header("location:login.php"); 


include("dbconnection.php");


$name = $_POST['name'];
$email= $_POST['email'];
$cn = $_POST['cn'];
$sub = $_POST['sub'];
$date = $_POST['date'];
$msg= $_POST['complaintMessage'];
$fn = $_POST['fac_name'];
$fs = $_POST['fac_sub'];
$branc = $_POST['branc'];
$seme = $_POST['seme'];
$sect = $_POST['sect'];

//echo $name."<br>";
//echo $email."<br>";
//echo $cn."<br>";
//echo $sub."<br>";
//echo $date."<br>";
//echo $msg."<br>";

//die;

$sq = "insert into complain_student values('$fn','$fs','$name','$email',$cn,'$branc','$sect','$seme','$sub','$date','$msg')";

if($con->query($sq))
{    
	   //$s1= "insert into login_staff values('$email','$dob')";
       //$con->query($s1); 
       //$_SESSION['estaff']=  $email;  	   
	   //$_SESSION['email']=$email;
	  //echo '<script>alert("Complain Send Successfully.....")</script>';
	  //header("location:student_dashboard.php");
	  echo '<script>alert("Complaint Sent Successfully.....")</script>';
      echo '<script>window.location.href="home_student_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Complain Not Send Successfully.....")</script>';
	echo "Click to Back Button for Try Again....";
}

?>