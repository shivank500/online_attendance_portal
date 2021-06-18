<?php
session_start();
if(!isset($_POST['take_attendance']))
	header("location:login.php");


include("dbconnection.php");


//$fs = $_POST['fs'];
//$fsc = $_POST['fsc'];
//$sem = $_POST['sem'];
//$branch = $_POST['branch'];
//$sec = $_POST['sec'];
//$datess = $_POST['datess'];
//$lecture = $_POST['lecture'];
$fs = $_SESSION['fs'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$lecture = $_SESSION['lecture'];
$datess = $_SESSION['datess'];
//$datess = date("d-m-Y", strtotime($datess));

$s_name = $_POST['name'];
$s_roll = $_POST['roll'];
$s_email = $_POST['email'];
//$s_att = $_POST['att'];

$c1 = array();
$c2 = array();
$c3 = array();
//$c4 = array();


for($i=0; $i<count($s_name);$i++)
{
	$c1[$i] = "";
	$c2[$i] = "";
	$c3[$i] = "";
}

for($i=0; $i<count($s_name);$i++)
{
	$c1[$i] = $s_name[$i];
	$c2[$i] = $s_roll[$i];
	$c3[$i] = $s_email[$i];
	$s_att[$i] = $_POST['attendance'.$i];
}

/*
for($i=0; $i<count($s_name);$i++)
{
	echo $c1[$i]." ".$c2[$i]." ".$c3[$i]." ".$s_att[$i]." ".$datess."<br>";
}
*/
//SELECT * FROM take_attendance WHERE MONTH(Date)<12;
//date_default_timezone_set("Asia/Calcutta");
//$now=new DateTime();
//$date=echo $now->format('d-m-Y H:i:s');

for($i=0; $i<count($s_name);$i++)
{
	$sq = "insert into take_attendance values('$datess','$fs',$sem,'$branch','$sec','$c1[$i]','$c2[$i]','$c3[$i]','$lecture','$s_att[$i]')";
	$con->query($sq);
}
echo '<script>alert("Attendance Taken Successfully")</script>';
echo '<script>window.location.href="home_staff_dashboard.php";</script>';
//header("location:staff_dashboard.php");	

?>