<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$email = $_SESSION['email'];
$date1 = $_SESSION['date1'];
$date2 = $_SESSION['date2'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

$s2= "select DISTINCT Faculty_Subject from take_attendance where (Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]')";
     $rs2=  $con->query($s2);

	
$date11 = date("d-m-Y", strtotime($date1));
$date22 = date("d-m-Y", strtotime($date2));

?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<h1 style="color:red;">Welcome , <?php echo $row[0];?></h3>
<h3 style="color:blue;">Email-: <?php echo $row[1];?></h3>
<h3 style="color:green;">Branch-: <?php echo $row[3];?></h3>
<h3 style="color:brown;">Section-: <?php echo $row[4];?></h3>
<h3 style="color:orange;">Semester-: <?php echo $row[5];?></h3>
<table border="3" style="font-size:20px;text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td><td></td><td></td></tr>
<tr style="text-align: center; margin-left:100px; background-color:skyblue;"><td><b>S.No.</b></td><td><b>Subject Name</b></td><td><b>Present Lecture <br> in given Dates</b></td><td><b>Total Lecture <br> in given Dates</b></td><td><b>Total Attendance %<br> in given Dates</b></td></tr>
<?php
														 $i=0;
														 $sum1=0;
														 $sum2=0;
														 $k=0;
														while($row2= $rs2->fetch_array())
                                                        {
															//echo $row2[0]."<br>";
															$i++;
															$s3= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='present' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]' and Faculty_Subject='$row2[0]' and Date(Date)>='$date1' and Date(Date)<='$date2-1')";
                                                            $rs3=  $con->query($s3); 
	                                                        $row3= $rs3->fetch_array();
															
															$s4= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='absent' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]' and Faculty_Subject='$row2[0]' and Date(Date)>='$date1' and Date(Date)<='$date2-1')";
                                                            $rs4=  $con->query($s4); 
	                                                        $row4= $rs4->fetch_array();

	                                                        $A=$row3[0];
	                                                        $S=$row3[0]+$row4[0];

	                                                        if($S==0)
															{
																$row3[0]="Not Valid";$S="Not Valid";$P="Not Valid";$row4[0]="Not Valid";;
															}
	                                                        else{$P=$A/$S*100;}
															
															
															$s33= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='present' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]' and Faculty_Subject='$row2[0]')";
                                                            $rs33=  $con->query($s33); 
	                                                        $row33= $rs33->fetch_array();
															
															$s44= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='absent' and Semester='$row[5]' and Branch='$row[3]' and Section='$row[4]' and Faculty_Subject='$row2[0]')";
                                                            $rs44=  $con->query($s44); 
	                                                        $row44= $rs44->fetch_array();
															
															$sum1+=$row33[0];
															$sum2+=$row44[0];
															
													    ?>
                                                          <tr style="text-align: center; margin-left:100px;"><td><?php echo $i; ?></td><td><?php echo $row2[0];?></td><td><?php echo $row3[0];?></td><td><?php echo $S;?></td><td><?php echo $P;?>%</td></tr>
														<?php
                                                        }
														//echo $sum1;
														?>
</table>
<h2>Thanks for Downloading a Attendance......</h2>
</center>