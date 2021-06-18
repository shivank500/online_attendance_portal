<?php
session_start();
if(!isset($_POST['update_attendance']))
	header("location:login.php");


include("dbconnection.php");


//$fs = $_POST['fs'];
//$fsc = $_POST['fsc'];
//$sem = $_POST['sem'];
//$branch = $_POST['branch'];
//$sec = $_POST['sec'];
//$datess = date("d-m-Y", strtotime($datess));

$fs = $_SESSION['fs'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$udates = $_SESSION['datesss'];
$ulecture = $_SESSION['lecturesss'];

$s_name = $_POST['name'];
$s_roll = $_POST['roll'];
$s_email = $_POST['email'];

//echo $udates;
//echo $ulecture;

//die;


$c1 = array();
$c2 = array();
$c3 = array();
//$c4 = array();

//echo $udates;;
//die;
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
	echo $c1[$i]." ".$c2[$i]." ".$c3[$i]." ".$s_att[$i]." ".$udates."<br>";
}

//SELECT * FROM take_attendance WHERE MONTH(Date)<12;
//date_default_timezone_set("Asia/Calcutta");
//$now=new DateTime();
//$date=echo $now->format('d-m-Y H:i:s');

echo $sem;
echo $branch;
echo $sec;
echo $fs;
echo $ulecture;

die;
*/
for($i=0; $i<count($s_name);$i++)
{
	//echo $c2[$i];
	//echo $s_att[$i];   
	$sq = "UPDATE take_attendance SET Status='$s_att[$i]' where (S_Email='$c2[$i]' and Date(Date)='$udates' and Faculty_Subject='$fs' and Lecture=$ulecture and Semester=$sem and Branch='$branch' and Section='$sec')";
}

if ($con->query($sq)) 
{
	echo '<script>alert("Attendance Updated Successfully")</script>';
    echo '<script>window.location.href="home_staff_dashboard.php";</script>';
}
else 
{
  echo "Error updating record: ";
}

?>