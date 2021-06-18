<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$s= "select * from staff ORDER by Name";
     $rs=  $con->query($s); 

$s1= "select * from hod ORDER by Name";
     $rs1=  $con->query($s1); 


?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td></tr>
<tr style="background-color: skyblue; text-align: center;"><td colspan="3" style="font-weight: bolder; color: white; font-size: 20px;"><i><u>List of Faculty</u></i></td></tr>
<tr style="text-align: center; margin-left:100px;"><td><b>S.No.</b></td><td><b>HOD Name</b></td><td><b>Department</b></td></tr>
<?php
$i=0;
while($row= $rs->fetch_array())
{
	$i=$i+1;
?>
<tr style="text-align: center; margin-left:100px;"><td><?php echo $i;?></td><td><?php echo $row[0];?></td><td><?php echo $row[10];?></td></tr>
<?php
}
?>
</table>
<h2 style="color:red;">Thanks for Downloading a List......</h2>
</center>