<?php

session_start();
if(!isset($_POST['su']))
	header("location:login.php"); 

include("dbconnection.php");

$email = $_SESSION['em'];

$branch = $_POST['branch'];
$section = $_POST['section'];
$semester = $_POST['semester'];
$fc = $_POST['fc'];
$mt = $_POST['mt'];
$sc = $_POST['sc'];
$address = $_POST['ad'];
$city = $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$pass=$_POST['pass'];

$fileurl= $_POST['pic'];


//----------------------------------For PIC----------------------------------------------------

$f = $_FILES['pic'];
 
$fname= $f['name'];
$fext =explode('.',$fname);
$ftype =strtolower(end($fext));

$reqtype= array('jpeg', 'jpg' , 'png');

if(in_array($ftype,$reqtype))
{
	$fileurl = 'profile_pic/'.$fname;
	move_uploaded_file($f['tmp_name'],$fileurl);
	//echo " file moved to our folder";
}	

//--------------------------------------------------------------------------------------

$sql = "UPDATE student SET Branch='$branch' , Section='$section' , Semester='$semester' , Father_CN='$fc' , Mother_CN='$mt' , Student_CN='$sc' , Address='$address' , City='$city' , State='$state' , ZIP='$zip' , Profile_Pic_URL='$fileurl' where Email='$email'";
$sql1 = "UPDATE login_all SET Password='$pass' where User_Name='$email'";

if ($con->query($sql) === TRUE  && $con->query($sql1) === TRUE) 
{
  //echo "Record updated successfully";
  $email = $_SESSION['em']; 
  //header("location:student_dashboard.php");	
  echo '<script>alert("Updation Profile Successfully")</script>';
  echo '<script>window.location.href="home_student_dashboard.php";</script>';
}

else 
{
  echo "Error updating record: " . $con->error;
}

?>