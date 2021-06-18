<?php
session_start();
if(!isset($_POST['sr']))
	header("location:login.php"); 

include("dbconnection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$rollno = $_POST['rollno'];
$branch = $_POST['branch'];
$section = $_POST['section'];
$semester = $_POST['semester'];
$fn = $_POST['fn'];	
$fc = $_POST['fc'];
$mn = $_POST['mn'];
$mt = $_POST['mt'];
$sc = $_POST['sc'];
$dob = $_POST['dob'];
$gender= $_POST['gender'];
$address = $_POST['ad'];
$city = $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$dob = date("d-m-Y", strtotime($dob));


//--------------------------------------------------------------------------------------


$fileurl = 'profile_pic/student.png';

//--------------------------------------------------------------------------------------

$sq = "insert into student values('$name','$email','$rollno' ,'$branch','$section','$semester','$fn','$fc','$mn','$mt','$sc','$dob','$gender','$address','$city','$state','$zip','$fileurl')";

if($con->query($sq))
{
	   $s1= "insert into login_all values('$email','$dob','student')";	
       $con->query($s1); 
       $_SESSION['email']=  $email;	
	   //header("location:student_dashboard.php");	
	   echo '<script>alert("Registration Successfull")</script>';
       echo '<script>window.location.href="home_student_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Please Enter Correct Information in Correct Box")</script>';
	echo "Click to Back Button for Again Registration....";
}

?>