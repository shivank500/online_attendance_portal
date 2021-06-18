<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$email = $_SESSION['email'];
$date1 = $_SESSION['date1'];
$date2 = $_SESSION['date2'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$fs = $_SESSION['fs'];
$lecture = $_SESSION['lecture'];


$s1= "select * from staff where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

	 //
$s2= "select DISTINCT S_Email from take_attendance where (Semester='$sem' and Branch='$branch' and Section='$sec' and Faculty_Subject='$fs') Order by S_Name";
     $rs2=  $con->query($s2);

	
$s33= "select * from staff where Email='$email'";
     $rs33=  $con->query($s33); 
	 
$s44= "select * from staff where Email='$email'";
     $rs44=  $con->query($s44); 
	 
$s55= "select * from staff where Email='$email'";
     $rs55=  $con->query($s55); 
	 
$s66= "select * from staff where Email='$email'";
     $rs66=  $con->query($s66); 

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
<tr style="margin-left:200px;"><td>.</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr style="text-align: center; margin-left:100px;  background-color:skyblue;"><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student Roll Number</b></td><td><b>Student Email ID</b></td><td><b>Lecture</b></td><td><b>Present<br> in given Dates</b></td><td><b>Absent <br> in given Dates</b></td><td><b>Total % <br> in given Dates</b></td><td><b>Overall Attendance<br> in Percentage</b></td></tr>
<?php
														 $i=0;
														 $sum=0;
														 $k=0;
														while($row2= $rs2->fetch_array())
                                                        {
															//echo $row2[0]."<br>";
															$i++;
															$s22= "select * from take_attendance where (Semester='$sem' and Branch='$branch' and Section='$sec' and Faculty_Subject='$fs' and S_email='$row2[0]' and Lecture='$lecture' and Date(Date)>='$date1' and Date(Date)<='$date2-1')";
                                                            $rs22=  $con->query($s22);
															$row22= $rs22->fetch_array();
															//echo $row22[0];
															
															$s3= "select COUNT(Status) from take_attendance where (S_Email='$row2[0]' and Status='present' and Semester='$sem' and Branch='$branch' and Section='$sec' and Lecture='$lecture' and Faculty_Subject='$fs' and Date(Date)>='$date1' and Date(Date)<='$date2-1')";
                                                            $rs3=  $con->query($s3); 
	                                                        $row3= $rs3->fetch_array();
															//echo $row3[0];
															
															$s4= "select COUNT(Status) from take_attendance where (S_Email='$row2[0]' and Status='absent' and Semester='$sem' and Branch='$branch' and Section='$sec' and Lecture='$lecture' and Faculty_Subject='$fs' and Date(Date)>='$date1' and Date(Date)<='$date2-1')";
                                                            $rs4=  $con->query($s4); 
	                                                        $row4= $rs4->fetch_array();
															//echo $row4[0];

	                                                        $A=$row3[0];
	                                                        $S=$row3[0]+$row4[0];

	                                                        if($S==0)
															{
																$row3[0]="Not Valid";$S="Not Valid";$P="Not Valid";$row4[0]="Not Valid";;
															}
	                                                        else{$P=$A/$S*100;}
													    ?>
                                                          <tr style="text-align: center; margin-left:100px;"><td><?php echo $i; ?></td><td><?php echo $row22[5];?></td><td><?php echo $row22[6];?></td><td><?php echo $row22[7];?></td><td><?php echo $lecture;?></td><td><?php echo $row3[0];?></td><td><?php echo $row4[0];?></td><td><?php echo $P;?> %</td><td></td></tr>
														<?php
                                                        }
														?>
</table>
<h2>Thanks for Downloading a Attendance......</h2>
</center>