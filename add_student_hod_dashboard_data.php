<?php
session_start();
if(!isset($_POST['add_stuyy']))
	header("location:login.php");

include("dbconnection.php");

$stuname = $_POST['stuname'];
$stuemail = $_POST['stuemail'];
$branch = $_POST['branch'];
$section = $_POST['sec'];
$semester = $_POST['sem'];

$sq = "insert into student (Name,Email,Semester,Branch,Section) values('$stuname','$stuemail',$semester,'$branch','$section')";

/*
echo $dprt;
echo $hodname;
echo $hodemail;
echo $hodcn;
die;
*/
if($con->query($sq))
{
	   $s1= "insert into login_all values('$stuemail','$stuemail','student')";	
       $con->query($s1); 
	   //echo "hh";
	   echo '<script>alert("ADD Student Successfull")</script>';
       echo '<script>window.location.href="home_hod_dashboard.php";</script>';
}
else
{
	echo '<script>alert("Student Not ADD Successfull")</script>';
}

?>