<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$email = $_SESSION['email'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

date_default_timezone_set("Asia/Calcutta");
$now=new DateTime();
$datt=$now->format('Y-m-d');
//echo $datt;
	 
$s2= "select * from take_attendance where (S_Email='$email' and Date(Date)='$datt' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]') ORDER by Lecture";
     $rs2=  $con->query($s2); 
     //$row2= $rs2->fetch_array();
	 
$s3= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='present' and Date(Date)='$datt' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]')";
     $rs3=  $con->query($s3); 
	 $row3= $rs3->fetch_array();
	 //echo $row2[0];
	 
$s4= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='absent' and Date(Date)='$datt' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]')";
     $rs4=  $con->query($s4); 
	 $row4= $rs4->fetch_array();
	 //echo $row3[0];

	 $A=$row3[0];
	 $S=$row3[0]+$row4[0];

	 if($S==0){$A="Not Valid";$S="Not Valid";$P="Not Valid";$row4[0]="Not Valid";}
	 else{$P=$A/$S*100;}

?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<h1 style="color:red;">Welcome , <?php echo $row[0];?></h3>
<h3 style="color:blue;">Email-: <?php echo $row[1];?></h3>
<h3 style="color:green;">Branch-: <?php echo $row[3];?></h3>
<h3 style="color:brown;">Section-: <?php echo $row[4];?></h3>
<h3 style="color:orange;">Semester-: <?php echo $row[5];?></h3>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td></tr>
<tr style="text-align: center; margin-left:100px; background-color:skyblue;"><td><b>S.No.</b></td><td><b>Subject Name</b></td><td><b>Lecture</b></td><td><b>Status</b></td></tr>
<?php
														 $i=0;
														while($row2= $rs2->fetch_array())
                                                        {
															$i++;
													    ?>
                                                          <tr style="text-align: center; margin-left:100px;"><td><?php echo $i; ?></td><td><?php echo $row2[1];?></td><td><?php echo $row2[8];?></td><td><?php echo $row2[9];?></td></tr>
                                                        <?php
                                                        }
														?>
</table>
<h2>Thanks for Downloading a Attendance......</h2>
</center>