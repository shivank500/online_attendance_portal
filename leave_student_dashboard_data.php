<?php
session_start();
if(!isset($_POST['leave_student']))
	header("location:login.php"); 


include("dbconnection.php");

$name = $_POST['name'];
$email= $_POST['email'];
$cn = $_POST['cn'];
$roll = $_POST['roll'];
$date = $_POST['date'];
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$leavetype = $_POST['leavetype'];
$lecture = $_POST['lecture'];
$reason = $_POST['reason'];
$fn = $_POST['fac_name'];
$fs = $_POST['fac_sub'];
$branc = $_POST['branc'];
$seme = $_POST['seme'];
$sect = $_POST['sect'];


//echo $name."<br>";
//echo $email."<br>";
//echo $cn."<br>";
//echo $roll."<br>";
//echo $date."<br>";
//echo $fromdate."<br>";
//echo $todate."<br>";
//echo $leavetype."<br>";
//echo $lecture."<br>";
//echo $reason."<br>";

//die;

$sq = "insert into leave_student values('$fn','$fs','$name','$email',$cn,$roll,'$branc','$sect','$seme','$date','$fromdate','$todate','$leavetype','$lecture','$reason')";

if($con->query($sq))
{    
	   //$s1= "insert into login_staff values('$email','$dob')";
       //$con->query($s1); 
       //$_SESSION['estaff']=  $email;  	   
	   //$_SESSION['email']=$email;
	  echo '<script>alert("Leave Request Send Successfully.....")</script>';
	  //header("location:student_dashboard.php");
      echo '<script>window.location.href="home_student_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Leave Not Apply Successfully.....")</script>';
	echo "Click to Back Button for Try Again....";
}

?>