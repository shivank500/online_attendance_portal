<?php
session_start();
if(!isset($_POST['mapp']))
	header("location:login.php"); 

include("dbconnection.php");

$semester1 = $_POST['semester1'];
$branch1 = $_POST['branch1'];
$section1 = $_POST['section1'];
$sub1 = $_POST['sub1'];
$fac_email = $_POST['fac_email'];

$semester2 = $_POST['semester2'];
$branch2 = $_POST['branch2'];
$section2 = $_POST['section2'];
$sub2 = $_POST['sub2'];

$semester3 = $_POST['semester3'];
$branch3 = $_POST['branch3'];
$section3 = $_POST['section3'];
$sub3 = $_POST['sub3'];

//echo $semester1;
//echo $branch1;
//echo $section1;
//echo $sub1;
//echo $fac_email;

//die;

$sq = "UPDATE staff SET Semester1='$semester1',Branch1='$branch1',Section1='$section1',Subject1='$sub1',
                        Semester2='$semester2',Branch2='$branch2',Section2='$section2',Subject2='$sub2',
						Semester3='$semester3',Branch3='$branch3',Section3='$section3',Subject3='$sub3' WHERE Email='$fac_email'";

if($con->query($sq))
{
	   //$s1= "insert into login_all values('$email','$dob')";	
       //$con->query($s1); 
       //$_SESSION['email']=  $email;	
	   //header("location:student_dashboard.php");	
	   echo '<script>alert("Mapping Successfull")</script>';
       echo '<script>window.location.href="home_hod_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Please Enter Correct Information in Correct Box")</script>';
	echo "Click to Back Button for Again Registration....";
}

?>