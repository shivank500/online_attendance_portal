<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$email = $_SESSION['email'];
$fs = $_SESSION['fs'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$lecture = $_SESSION['lecture'];


$s1= "select * from staff where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

	 //
$s2= "select DISTINCT S_Email from take_attendance where (Semester='$sem' and Branch='$branch' and Section='$sec' and Faculty_Subject='$fs') Order by S_Name";
     $rs2=  $con->query($s2);

	 
$s3= "select * from staff where Email='$email'";
     $rs3=  $con->query($s3); 
	 
$s4= "select * from staff where Email='$email'";
     $rs4=  $con->query($s4); 
	 
$s5= "select * from staff where Email='$email'";
     $rs5=  $con->query($s5); 
	 
$s6= "select * from staff where Email='$email'";
     $rs6=  $con->query($s6); 

?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<h1 style="color:red;">Welcome , <?php echo $row[0];?></h3>
<h3 style="color:blue;">Email-: <?php echo $row[10];?></h3>
<h3 style="color:green;">Branch-: <?php echo $branch;?></h3>
<h3 style="color:brown;">Section-: <?php echo $sec;?></h3>
<h3 style="color:orange;">Semester-: <?php echo $sem;?></h3>
<h3 style="color:orange;">Subject-: <?php echo $fs;?></h3>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr style="text-align: center; margin-left:100px; background-color:skyblue;"><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student Roll Number</b></td><td><b>Student Email ID</b></td><td><b>Lecture</b></td><td><b>Attendance Status</b></td><td><b>Send Message</b></td><td><b>Total Attendance<br> in Percentage</b></td></tr>
                                                        <?php
														 $i=0;
														 $sum=0;
														 $k=0;
														while($row2= $rs2->fetch_array())
                                                        {
															//echo $row2[0]."<br>";
															$i++;
															date_default_timezone_set("Asia/Calcutta");
                                                            $now=new DateTime();
															$datt=$now->format('Y-m-d');
															$s22= "select * from take_attendance where (Semester='$sem' and Branch='$branch' and Section='$sec' and Faculty_Subject='$fs' and S_email='$row2[0]' and Lecture='$lecture' and Date(Date)='$datt')";
                                                            $rs22=  $con->query($s22);
															$row22= $rs22->fetch_array();
													    ?>
                                                          <tr style="text-align: center; margin-left:100px;"><td><?php echo $i; ?></td><td><?php echo $row22[5];?></td><td><?php echo $row22[6];?></td><td><?php echo $row22[7];?></td><td><?php echo $lecture;?></td><td><?php echo $row22[9];?></td><td></td><td></td></tr>
														<?php
                                                        }
														?>
														
</table>
<h2>Thanks for Downloading a Attendance......</h2>
</center>