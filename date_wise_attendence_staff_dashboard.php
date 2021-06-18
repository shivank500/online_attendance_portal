<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");


include("dbconnection.php");


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

<link rel="stylesheet" href="css/date_wise_attendence_staff_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">
  
<?php include("header_staff.php");?>
  
<form action="date_wise_attendence_staff_dashboard_data.php" method="post" enctype="multipart/form-data">
<div class="container" style="margin-top: 30px;">
    <div class="row flex-lg-nowrap">
      <div class="col" style="font-size: 5px;">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body" style="background: seashell; border:3px solid black;">
                    <div class="row"style="text-align:center">
                        <div class="col d-flex flex-column flex-sm-row  mb-12" >
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <h2 style=" color: brown; font-weight: bolder; font-size: 24px;"><i><u>Date Wise Attendance</u></i></h2>
								<h2 style=" color: brown; font-weight: bolder; font-size: 24px;"><i><u>Date--><?php echo $date1;?> and <?php echo $date2;?></u></i></h2><br>
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
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
														while($row33= $rs33->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row33[12];?>"  style="color: teal;"><?php echo $row33[12];?></option>
                                                        
														<?php
														if($row33[16]!=0)
														{
															?>
															<option value="<?php echo $row33[16];?>"  style="color: teal;"><?php echo $row33[16];?></option>
															<?php
															}
														if($row33[20]!=0)
														{
															?>
															<option value="<?php echo $row33[20];?>"  style="color: teal;"><?php echo $row33[20];?></option>
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
														while($row44= $rs44->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row44[13];?>"  style="color: teal;"><?php echo $row44[13];?></option>
                                                        <?php
														
														if($row44[16]!=0)
														{
															?>
															<option value="<?php echo $row44[17];?>"  style="color: teal;"><?php echo $row44[17];?></option>
															<?php
															}
													    if($row44[20]!=0)
														{
															?>
															<option value="<?php echo $row44[21];?>"  style="color: teal;"><?php echo $row44[21];?></option>
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
														while($row55= $rs55->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row55[14];?>"  style="color: teal;"><?php echo $row55[14];?></option>
                                                        <?php
														
														if($row55[16]!=0)
														{
															?>
															<option value="<?php echo $row55[18];?>"  style="color: teal;"><?php echo $row55[18];?></option>
															<?php
															}
														if($row55[20]!=0)
														{
															?>
															<option value="<?php echo $row55[22];?>"  style="color: teal;"><?php echo $row55[22];?></option>
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
														while($row66= $rs66->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row66[15];?>"  style="color: teal;"><?php echo $row66[15];?></option>
                                                        <?php
														
														if($row66[16]!=0)
														{
															?>
															<option value="<?php echo $row66[19];?>"  style="color: teal;"><?php echo $row66[19];?></option>
															<?php
															}
														if($row66[20]!=0)
														{
															?>
															<option value="<?php echo $row66[23];?>"  style="color: teal;"><?php echo $row66[23];?></option>
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
					                      <button name="seacrch" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Search</h2></button><br>
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
                                                         <tr><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student Roll Number</b></td><td><b>Student Email ID</b></td><td><b>Lecture</b></td><td><b>Present<br> in given Dates</b></td><td><b>Absent <br> in given Dates</b></td><td><b>Total % <br> in given Dates</b></td><td><b>Overall Attendance<br> in Percentage</b></td></tr>
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
                                                          <tr><td><?php echo $i; ?></td><td><?php echo $row22[5];?></td><td><?php echo $row22[6];?></td><td><?php echo $row22[7];?></td><td><?php echo $lecture;?></td><td><?php echo $row3[0];?></td><td><?php echo $row4[0];?></td><td><?php echo $P;?> %</td><td></td></tr>
														<?php
                                                        }
														?>
                                                        </table>
                                                         </div><a href="download_date_wise_attendence_staff_dashboard.php"><h2>Click here to Download Attendance</h2></a>
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
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 20px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
