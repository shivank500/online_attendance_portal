<?php
session_start();
if(!isset($_POST['deletete']))
	header("location:login.php");

include("dbconnection.php");

$fs = $_SESSION['fs'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$ds = $_POST['ds'];
//echo count($_POST['ds']);
//echo "kll";
//die;
foreach($ds as $i)
{
$sq = "DELETE FROM student WHERE Email='$i'";
//$con->query($sq);
if($con->query($sq))
{
	$sq1 = "DELETE FROM login_all WHERE User_Name='$i'";
	$con->query($sq1); 
}
}

echo '<script>alert("Student Deleted Successfull")</script>';
//echo $i." ";
echo '<script>window.location.href="home_hod_dashboard.php";</script>';
//header("location:delete_student_staff_dashboard.php");	

?>