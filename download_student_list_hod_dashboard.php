<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$email = $_SESSION['email'];

$s= "select * from hod where Email='$email'";
     $rs=  $con->query($s); 
     $row= $rs->fetch_array();

$s1= "select * from staff where (Branch1='$row[4]' or Branch2='$row[4]' or Branch3='$row[4]') ORDER by Name";
     $r1=  $con->query($s1); 
	 
$s2= "select * from student where (Branch='$row[4]') ORDER by Semester";
     $r2=  $con->query($s2);	

$_SESSION['fs']="";
$_SESSION['sem']="";
$_SESSION['sec']="";
$_SESSION['branch']="";

?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<h1 style="color:red;">Welcome , <?php echo $row[0];?></h3>
<h3 style="color:blue;">Email-: <?php echo $row[1];?></h3>
<h3 style="color:orange;">Department-: <?php echo $row[4];?></h3>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td><td></td><td></td><td></td></tr>
<tr style="background-color: yellow; text-align: center;"><td colspan="6" style="font-weight: bolder; color: black; font-size: 20px;"><i><u>List of Students of My Department</u></i></td></tr>
<tr style="text-align: center; margin-left:100px;"><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student E-Mail</b></td><td><b>Semester</b></td><td><b>Roll Number</b></td><td><b>Contact Number</b></td></tr>
<?php
$i=0;
while($row2= $r2->fetch_array())
{
	$i=$i+1;
?>
<tr style="text-align: center; margin-left:100px;"><td><?php echo $i;?></td><td><?php echo $row2[0];?></td><td><?php echo $row2[1];?></td><td><?php echo $row2[5];?></td><td><?php echo $row2[2];?></td><td><?php echo $row2[10];?></td></tr>
<?php
}
?>
</table>
<h2>Thanks for Downloading a List......</h2>
</center>