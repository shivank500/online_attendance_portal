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
     //$row2= $rs2->fetch_array();
	 
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

<link rel="stylesheet" href="css/complain_student_dashboard.css">
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
                              <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>Complaint Form</i></h1>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
<form action="complain_student_dashboard_data.php" method="post" enctype="multipart/form-data">
<div>
    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
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
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:20px; font-weight:600; color:red;"><i>Full Name--:<?php echo $row[0];?></i></label>
									  <input type="hidden" value="<?php echo $row[0];?>" name="name" >
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:20px; font-weight:600; color:blue;"><i>E-mail--:<?php echo $row[1];?></i></label>
									  <input type="hidden" value="<?php echo $row[1];?>" name="email" >
                                    </div>
                                  </div>
								  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:20px; font-weight:600; color:green;"><i>Contact Number--:<?php echo $row[10];?></i></label>
										  <input type="hidden" value="<?php echo $row[10];?>" name="cn" >
                                        </div>
                                      </div>
                                </div>
								<input type="hidden" value="<?php echo $row[3];?>" name="branc">
								<input type="hidden" value="<?php echo $row[4];?>" name="sect" >
								<input type="hidden" value="<?php echo $row[5];?>" name="seme" >
								
								<br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Subject</label>
                                        <input class="form-control" type="text" name="sub" placeholder="Subject" required="required">
                                      </div>
                                    </div>
									<div class="col-md-6">
                                            <div class="form-group">
                                              <label>Faculty Name</label>
											  <select class="form-control" name="fac_name" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
											             <?php
														while($row2= $rs2->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row2[0];?>"  style="color: teal;"><?php echo $row2[0];?></option>
                                                        <?php
                                                        }
														?>
	                                          </select>
                                            </div>
                                          </div>
									<div class="col-md-6">
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
									<div class="col-md-6">
                                            <div class="form-group">
                                              <label>Date</label>
                                              <input class="form-control" type="date" name="date" required="">
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

    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="e-profile">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                  </div>
                              </div>
                            <div class="col-8">
                              <div class="form-group">
                                <div class="form-input-wide">
                                    <textarea class="form-textarea" name="complaintMessage" cols="40" rows="6" data-component="textarea" aria-labelledby="label_4" placeholder="Complaint Message"  required="required"></textarea>
                                  </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                  </div>
                              </div>
                        </div>
                        <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                      </div>
                                  </div>
                                  <div class="col-10">
                                <div class="form-group">
                                  <button name="complain_student" type="submit" class="btn btn-success btn-lg">
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
