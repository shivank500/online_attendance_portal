<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");


include("dbconnection.php");

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

<link rel="stylesheet" href="css/todaysattendence_staff_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

  <?php include("header_staff.php");?>
  
<div class="container" style="margin-top: 30px;">
  <div class="row flex-lg-nowrap">
    <div class="col" style="font-size: 5px;">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body" style="background: seashell; border:3px solid black;">
                  <div class="row"style="text-align:center">
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                          <h2 style=" color: white; font-weight: bolder; text-align: center; color: brown; font-size: 25px;"><i>Todays Attendance</i></h2>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<form action="todaysattendence_staff_dashboard_data.php" method="post" enctype="multipart/form-data">
<div class="container" style="margin-top: -10px;">
    <div class="row flex-lg-nowrap">
      <div class="col" style="font-size: 5px;">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body" style="background: seashell; border:3px solid black;">
                    <div class="row"style="text-align:center">
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<select class="form-control" name="sem" required="" style="font-size:15px;color:red; font-weight:bolder">
											  <option value="" style="color: teal;">Semester..</option>
											             <?php
														while($row3= $rs3->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row3[12];?>"  style="color: teal;"><?php echo $row3[12];?></option>
                                                        
														<?php
														if($row3[16]!=0)
														{
															?>
															<option value="<?php echo $row3[16];?>"  style="color: teal;"><?php echo $row3[16];?></option>
															<?php
															}
														if($row3[20]!=0)
														{
															?>
															<option value="<?php echo $row3[20];?>"  style="color: teal;"><?php echo $row3[20];?></option>
															<?php
															}
														}
														?>
	                                          </select>
							</div><br>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<select class="form-control" name="branch" required="" style="font-size:15px;color:red; font-weight:bolder">
											  <option value="" style="color: teal;">Branch..</option>
											             <?php
														while($row4= $rs4->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row4[13];?>"  style="color: teal;"><?php echo $row4[13];?></option>
                                                        <?php
														
														if($row4[16]!=0)
														{
															?>
															<option value="<?php echo $row4[17];?>"  style="color: teal;"><?php echo $row4[17];?></option>
															<?php
															}
													    if($row4[20]!=0)
														{
															?>
															<option value="<?php echo $row4[21];?>"  style="color: teal;"><?php echo $row4[21];?></option>
															<?php
															}
														}
														?>
	                                          </select>
							</div><br>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<select class="form-control" name="sec" required="" style="font-size:15px;color:red; font-weight:bolder">
											  <option value="" style="color: teal;">Section..</option>
											             <?php
														while($row5= $rs5->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row5[14];?>"  style="color: teal;"><?php echo $row5[14];?></option>
                                                        <?php
														
														if($row5[16]!=0)
														{
															?>
															<option value="<?php echo $row5[18];?>"  style="color: teal;"><?php echo $row5[18];?></option>
															<?php
															}
														if($row5[20]!=0)
														{
															?>
															<option value="<?php echo $row5[22];?>"  style="color: teal;"><?php echo $row5[22];?></option>
															<?php
															}
														}
														?>
	                                          </select>
							</div><br>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<select class="form-control" name="fs" required="" style="font-size:15px;color:red; font-weight:bolder">
											  <option value="" style="color: teal;">Subject..</option>
											             <?php
														while($row6= $rs6->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row6[15];?>"  style="color: teal;"><?php echo $row6[15];?></option>
                                                        <?php
														
														if($row6[16]!=0)
														{
															?>
															<option value="<?php echo $row6[19];?>"  style="color: teal;"><?php echo $row6[19];?></option>
															<?php
															}
														if($row6[20]!=0)
														{
															?>
															<option value="<?php echo $row6[23];?>"  style="color: teal;"><?php echo $row6[23];?></option>
															<?php
															}
														}
														?>
	                                          </select>
							</div><br>
							
							
							
							
                        </div>
                      </div>
					  <br><br>
					  <div class="row">
					  <div class="col-4"></div>
					  <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
	     <select class="form-control" name="lecture" required="required" style="font-size:15px;color:red; font-weight:bolder">
		    <option value="">Lecture..</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
	     </select>
                            </div>
							</div>
					  <br><br>
					  <div class="row">
					<div class="col-3"></div>
	                                      <div class="col-6">
					                      <button name="today" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Search</h2></button><br>
					                      </div>
                    </div>
                    </div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  </form>
		  		  

          <div class="container">
            <div class="row flex-lg-nowrap">
              <div class="col" style="font-size: 5px;">
                <div class="row">
                  <div class="col mb-1">
                    <div class="card">
                      <div class="card-body" style="background: seashell; border:3px solid black;">
                            <div class="row"style="text-align:center">
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                                        <div class="col-12" style="margin: auto;">
                                            <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                         <div class="table-responsive">
                                                        <table class="table" border="2" style="font-size: 15px; text-align: center; background-color:lightcyan;">
                                                         <tr><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student Roll Number</b></td><td><b>Student Email ID</b></td><td><b>Lecture</b></td><td><b>Attendance Status</b></td><td><b>Send Message</b></td><td><b>Total Attendance<br> in Percentage</b></td></tr>
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
                                                          <tr><td><?php echo $i; ?></td><td><?php echo $row22[5];?></td><td><?php echo $row22[6];?></td><td><?php echo $row22[7];?></td><td><?php echo $lecture;?></td><td><?php echo $row22[9];?></td><td></td><td></td></tr>
														<?php
                                                        }
														?>
														
														</table>
                                                         </div><a href="download_todaysattendence_staff_dashboard.php"><h2>Click here to Download Attendance</h2></a>
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

<br><br><br>
<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 20px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidence of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
  
</body>
</html>
