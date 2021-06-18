<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");

$email = $_SESSION['email'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

$s2= "select * from staff ORDER BY Name";
     $rs2=  $con->query($s2); 

$s3= "select * from staff ORDER BY Name";
     $rs3=  $con->query($s3); 
	 
$s6= "select * from staff";
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

<link rel="stylesheet" href="css/leave_student_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

<?php include("header_student.php");?>

    <!--<div class="vertical"></div>-->

    <div class="container">
      <div class="row flex-lg-nowrap">
        <div class="col" style="font-size: 5px;">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body" style="background-color:seashell; border:3px solid black;">
                      <div class="row"style="text-align:center">
                          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                              <h1 style=" color: black; font-weight: bolder;"><i>Apply Leave Form</i></h1>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<form action="leave_student_dashboard_data.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size:17px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                              <div class="col">
                                <div class="row">
                                  <div class="col-5">
                                    <div class="form-group">
                                      <label style="font-size:20px; color:black; font-weight:600; color:red;"><i>Full Name--:<?php echo $row[0];?></i></label>
									  <input type="hidden" value="<?php echo $row[0];?>" name="name" >
                                    </div>
                                  </div>
                                  <div class="col-2">
                                    <div class="form-group">
                                    </div>
                                  </div>
                                  <div class="col-5">
                                    <div class="form-group">
                                      <label style="font-size:20px; color:black; font-weight:600; color:blue;"><i>E-mail--:<?php echo $row[1];?></i></label>
									  <input type="hidden" value="<?php echo $row[1];?>" name="email" >
                                    </div>
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-5">
                                            <div class="form-group">
                                              <label style="font-size:20px; color:black; font-weight:600; color:green;"><i>Student Contact Number--:<?php echo $row[10];?></i></label>
										  <input type="hidden" value="<?php echo $row[10];?>" name="cn" >
                                            </div>
                                          </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                            </div>
                                          </div>
                                          <div class="col-5">
                                            <div class="form-group">
                                              <label style="font-size:20px; color:black; font-weight:600; color:orange;"><i>Roll Number--:<?php echo $row[10];?></i></label>
										  <input type="hidden" value="<?php echo $row[2];?>" name="roll" >
                                            </div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                            <div class="col">
                                                <div class="form-group">
												<label>Faculty Name</label>
											  <select class="form-control" name="fac_name" required="required" style="font-size:15px;">
											  <option selected>Choose..</option>
											             <?php
														while($row2= $rs2->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row2[0];?>"><?php echo $row2[0];?></option>
                                                        <?php
                                                        }
														?>
	                                          </select>
											  </div>
                                              </div>
											  <div class="col">
                                                <div class="form-group">
												<label>Faculty Subject</label>
											  <select class="form-control" name="fac_sub" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
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
                                              </div>
                                              </div>
                                              <div class="col">
                                                <div class="form-group">
                                                  <label>Today Date</label>
                                                  <input class="form-control" type="date" name="date">
                                                </div>
                                              </div>
                                          </div>
								<input type="hidden" value="<?php echo $row[3];?>" name="branc">
								<input type="hidden" value="<?php echo $row[4];?>" name="sect" >
								<input type="hidden" value="<?php echo $row[5];?>" name="seme" >
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

    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px; color: white;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                              <div class="col">
                                <div class="row">
                                  <div class="col-5">
                                    <div id="cid_10" class="form-input jf-required">
                                        <label class="form-label form-label-left form-label-auto" style="color:black;">Select Leave Type</label><br>
                                        <select class="form-dropdown validate[required]" name="leavetype" style="width:100%; color: red;" data-component="dropdown" required="" aria-labelledby="label_10">
                                          <option value="" style="color: teal;">Leave Type</option>
                                          <option value="Annual Leave" style="color: teal;"> Annual Leave </option>
                                          <option value="Emergency Leave" style="color: teal;"> Emergency Leave </option>
                                          <option value="Medical Leave" style="color: teal;"> Medical Leave </option>
                                          <option value="Other" style="color: teal;"> Other </option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-2">
                                    <div class="form-group">
                                    </div>
                                  </div>
								  <div class="col-5">
                                        <div class="form-group">
                                            <label  style="color:black;">From Date</label>
                                            <input class="form-control" type="date" name="fromdate" required="">
                                        </div>
                                      </div>
                                  
                                </div>
                                  <div class="row">
                                    <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-label"  style="color:black;"> Lecture Number </label><br>
                                        <select class="form-dropdown validate[required]" name="lecture" required="" style="width:100%; color: red; font-size:15px;	">
		    <option value=""style="color: teal;">Choose..</option>
			<option value="1"style="color: teal;">1</option>
			<option value="2"style="color: teal;">2</option>
			<option value="3"style="color: teal;">3</option>
			<option value="4"style="color: teal;">4</option>
			<option value="5"style="color: teal;">5</option>
			<option value="6"style="color: teal;">6</option>
			<option value="7"style="color: teal;">7</option>
			<option value="8"style="color: teal;">8</option>
	     </select>
                                    </div>
                                  </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                            </div>
                                          </div>
                                          <div class="col-5">
                                            <div class="form-group">
                                                <label style="color:black;">To Date</label>
                                                <input class="form-control" type="date" name="todate" required="">
                                            </div>
                                          </div>
                                      </div>
                                      <hr><hr>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                  </div>
                                              </div>
                                            <div class="col-6">
                                              <div class="form-group">
                                                <div class="form-input-wide">
                                                    <textarea name="reason" class="form-textarea" cols="40" rows="6" data-component="textarea" aria-labelledby="label_4" placeholder="Reason for Applying Leave" style="color:black;" required="required"></textarea>
                                                  </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-2">
                                                <div class="form-group">
                                                  <button name="leave_student" type="submit" class="btn btn-success btn-lg" data-component="button" data-content="">
                                                      Submit
                                                    </button></div>
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
	</form>
    <footer>
      <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1">
          <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
            &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
            
        </div>
      </div>
    </footer>
</body>
</html>
