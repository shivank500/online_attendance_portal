<?php

session_start();
if(!isset($_POST['stu']))
	  header("location:login.php");
      //echo '<script>window.location.href="login.php";</script>';

//$ac=$_SESSION['stu'];
//  echo $ac;

include("dbconnection.php");

$email = $_SESSION['em'];

$cn = $_POST['cn'];
$wo = $_POST['wo'];
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

$sql = "UPDATE staff SET Contact_Number='$cn' , Work='$wo' , Address='$address' , City='$city' , State='$state' , ZIP='$zip' , Profile_Pic_URL='$fileurl' where Email='$email'";
$sql1 = "UPDATE login_all SET Password='$pass' where User_Name='$email'";

if ($con->query($sql) === TRUE  && $con->query($sql1) === TRUE) 
{
	$email = $_SESSION['em']; 
  //echo "Record updated successfully";
  echo '<script>alert("Updation Profile Successfully")</script>';
  echo '<script>window.location.href="home_staff_dashboard.php";</script>';
  //header("location:staff_dashboard.php");	
  //$_SESSION['stu']=1;
  //$ac=$_SESSION['stu'];
  //echo $ac;
  
}

else 
{
  echo "Error updating record: " . $con->error;
}

?>