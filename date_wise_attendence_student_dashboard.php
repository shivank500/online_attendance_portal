<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");

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


<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link rel="stylesheet" href="css/date_wise_attendence_student_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

  <?php include("header_student.php");?>


<form action="date_wise_attendence_student_dashboard_data.php" method="post" enctype="multipart/form-data">
<div class="container" style="margin-top: 30px;">
    <div class="row flex-lg-nowrap">
      <div class="col" style="font-size: 5px;">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="row"style="text-align:center">
                        <div class="col d-flex flex-column flex-sm-row  mb-12" >
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <h2 style=" color: black; font-weight: bolder; font-size: 24px;"><i><u>Date Wise Attendance</u></i></h2>
								<h2 style=" color: black; font-weight: bolder; font-size: 24px;"><i><u>Date--><?php echo $date11;?> and <?php echo $date22;?></u></i></h2><br>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h3><label>*From*</label></h3>
                                <input type="date" name="date1" class="form-control" placeholder="Enter Date From" required="required">
                            </div><br>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <h3><label>*To*</label></h3>
                                <input type="date" name="date2" class="form-control" placeholder="Enter Date To" required="required">
                            </div>
                        </div>
                      </div><button class="btn btn-primary" type="submit" style="margin-left:72%; margin-top:2%" name="studa">Choose..</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</form>

<div class="container" style="margin-top: -10px;">
    <div class="row flex-lg-nowrap">
      <div class="col" style="font-size: 5px;">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="row"style="text-align:center">
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                            <h2 style="font-weight: bolder; color:black; color:red;"><i>Roll No.-:<?php echo $row[2];?></i></h2>
                            <h2 style="font-weight: bolder; color:black; color:blue;"><i>Semester-:<?php echo $row[5];?></i></h2>
                            <h2 style="font-weight: bolder; color:black; color:green;"><i>Branch-:<?php echo $row[3];?></i></h2>
                            <h2 style="font-weight: bolder; color:black; color:orange;"><i>Section-:<?php echo $row[4];?></i></h2>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row flex-lg-nowrap">
              <div class="col" style="font-size: 5px;">
                <div class="row">
                  <div class="col mb-1">
                    <div class="card">
                      <div class="card-body" style="background-color:seashell; border:3px solid black;"> 
                            <div class="row"style="text-align:center">
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                                        <div class="col-12" style="margin: auto;">
                                            <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                         <div class="table-responsive">
                                                        <table class="table" border="2" style="font-size: 15px; text-align: center; background-color:khaki;">
                                                         <tr><td><b>S.No.</b></td><td><b>Subject Name</b></td><td><b>Present Lecture <br> in given Dates</b></td><td><b>Total Lecture <br> in given Dates</b></td><td><b>Total Attendance %<br> in given Dates</b></td></tr>
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
                                                          <tr><td><?php echo $i; ?></td><td><?php echo $row2[0];?></td><td><?php echo $row3[0];?></td><td><?php echo $S;?></td><td><?php echo $P;?>%</td></tr>
														<?php
                                                        }
														//echo $sum1;
														?>
														</table>
                                                         </div><a href="download_date_wise_attendence_student_dashboard.php"><h2>Click here to Download Attendance</h2></a>
                                                   </div>
                                                   
                                              </div>    
											  <div class="row">
                                                <div class="col-12">
                                                    <div class="progress" style="margin-top:2px; height: 30px; background: black;">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $sum1/($sum1+$sum2)*100; ?>%; background: white;">
                                                          <p style="color: black; font-weight: bolder; font-size: 20px; margin: auto;">Overall <?php echo $sum1/($sum1+$sum2)*100; ?>%</p>
                                                        </div>
                                                      </div>
                                                </div>
                                              </div> 
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>





<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 30px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
