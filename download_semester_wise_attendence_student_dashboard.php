<?php
session_start();

include("dbconnection.php");

$email = $_SESSION['email'];
$seme = $_SESSION['seme'];

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();
	 
$s2= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='present' and Semester='$seme')";
     $rs2=  $con->query($s2); 
	 $row2= $rs2->fetch_array();
	 //echo $row2[0];
	 
$s3= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='absent' and Semester='$seme')";
     $rs3=  $con->query($s3); 
	 $row3= $rs3->fetch_array();
	 //echo $row3[0];
	 $A=$row2[0];
	 $S=$row3[0]+$row2[0];
	 
	 if($S==0){$A="Not Valid";$S="Not Valid";$P="Not Valid";}
	 else{$P=$row2[0]/$S*100;}

?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<h1 style="color:red;">Welcome , <?php echo $row[0];?></h3>
<h3 style="color:blue;">Email-: <?php echo $row[1];?></h3>
<h3 style="color:green;">Branch-: <?php echo $row[3];?></h3>
<h3 style="color:brown;">Section-: <?php echo $row[4];?></h3>
<h3 style="color:orange;">Semester-: <?php echo $row[5];?></h3>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td><td></td></tr>
<tr style="text-align: center; margin-left:100px; background-color:skyblue;"><td><b>S.No.</b></td><td><b>Present Lecture <br> in Selected Semester</b></td><td><b>Total Lecture <br> in Selected Semester</b></td><td><b>Total Attendance %<br> in Selected Semester</b></td></tr>
<?php
     $i=1;
     //while($row= $rs->fetch_array())
	 {
?>
		<tr style="text-align: center; margin-left:100px;"><td>1</td><td><?php echo $A;?></td><td><?php echo $S;?></td><td><?php echo $P;?> %</td></tr>
<?php	 
        $i++;
	 }
?>
</table>
<h2>Thanks for Downloading a Attendance......</h2>
</center>