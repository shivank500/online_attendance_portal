<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");


include("dbconnection.php");

$email = $_SESSION['email'];
$sem = $_SESSION['sem'];
$branch = $_SESSION['branch'];
$sec = $_SESSION['sec'];
$sub = $_SESSION['sub'];
$fs = $_SESSION['fs'];

$s1= "select * from staff where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

	 //echo $row[0];
	 
$s2= "select * from complain_student where (Semester='$sem' and Branch='$branch' and Section='$sec' and Faculty_Subject='$fs') ORDER BY Date DESC";
     $rs2=  $con->query($s2); 
     //$row2= $rs2->fetch_array();
	 
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
                          <h2 style=" color: white; font-weight: bolder; text-align: center; color: brown; font-size: 25px;"><i>Complaint Issue</i></h2>
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
														
														if($row6[16]!=0)
														{
															?>
															<option value="<?php echo $row66[19];?>"  style="color: teal;"><?php echo $row66[19];?></option>
															<?php
															}
														if($row6[20]!=0)
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
					<div class="col-3"></div>
	                                      <div class="col-6">
					                      <button name="comstaff" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Search</h2></button><br>
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
                                                         <tr><td><b>S.No.</b></td><td><b>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>Student Name</b></td><td><b>Student Roll Number</b></td><td><b>Student Email ID</b></td><td><b>Subject</b></td><td><b>Complaint Message</b></td></tr>
                                                        <?php
														 $i=-1;
														while($row2= $rs2->fetch_array())
                                                        {
															$i++;
															$j=$i+1;
															//$S=$row3[0]+$row2[0];
															//$P=$row2[0]/$S*100;
															$row2[9] = date("d-M-Y", strtotime($row2[9]));
													    ?>
                                                          <tr><td><?php echo $j; ?></td><td><?php echo $row2[9];?></td><td><?php echo $row2[2];?></td><td><?php echo $row2[4];?></td><td><?php echo $row2[3];?></td><td><?php echo $row2[8];?></td><td><?php echo $row2[10];?></td></tr>
                                                        <?php
                                                        }
														?>
</table>
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

<br><br><br>
<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 20px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
  
</body>
</html>
