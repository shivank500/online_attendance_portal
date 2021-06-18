<?php
session_start();
if(!isset($_POST['str']))
	header("location:login.php"); 

include("dbconnection.php");

$name = $_POST['name'];
$eid = $_POST['eid'];
$cn = $_POST['cn'];
$dob = $_POST['dob'];
$wo = $_POST['wo'];
$gender= $_POST['gender'];
$address = $_POST['ad'];
$city = $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$email= $_POST['email'];
$dob = date("d-m-Y", strtotime($dob));


$fileurl = 'profile_pic/teacher.png';
//--------------------------------------------------------------------------------------
/*
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
	
*/
//--------------------------------------------------------------------------------------

//echo $name."<br>".$eid."<br>".$cn."<br>".$dob."<br>".$wo."<br>".$gender."<br>".$address."<br>".$city."<br>".$state."<br>".$zip."<br>".$email."<br>".$fileurl;
//die;
$ss="NULL";
$d="NULL";
$sq = "insert into staff values('$name','$eid','$cn','$dob','$wo','$gender','$address','$city','$state','$zip','$email','$fileurl','$ss','$d','$d','$d','$ss','$d','$d','$d','$ss','$d','$d','$d')";

if($con->query($sq))
{    
	   $s1= "insert into login_all values('$email','$dob','staff')";	
       $con->query($s1); 
       $_SESSION['email']=  $email;  	   
	  //header("location:staff_dashboard.php");
       echo '<script>alert("Registration Successful")</script>';
       echo '<script>window.location.href="home_staff_dashboard.php";</script>';	  
	  //echo "Shivank";
}
else
{
	echo '<script>alert("Please Enter Correct Information in Correct Box")</script>';
	echo "Click to Back Button for Again Registration....";
	echo $con->error;
}

?>