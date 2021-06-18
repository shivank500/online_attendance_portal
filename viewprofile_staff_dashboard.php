<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");

$email = $_SESSION['email'];

$s1= "select * from staff where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

$s2= "select * from staff where Email='$email'";
     $rs2=  $con->query($s2); 

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

<link rel="stylesheet" href="css/viewprofile_staff_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">
  
  <?php include("header_staff.php");?>
  
<div class="container" style="margin-top: 10px;">
  <div class="row flex-lg-nowrap">
    <div class="col" style="font-size: 5px;">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body" style="background:seashell; border:3px solid black;">
                  <div class="row"style="text-align:center">
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12">
                          <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>View Profile </i></h1>
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
              <div class="card-body" style="background:seashell; border:3px solid black;">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <img src="<?php echo $row[11];?>" height="100%" width="100%"  alt="Image not uploaded"></img>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="font-size:20px; color:red;"><i>Name-:<?php echo $row[0];?></i></h4>
						<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="font-size:20px; color:blue;"><i>Email-:<?php echo $row[10];?></i></h4>
						<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="font-size:20px; color:green;"><i>Contact Number-:<?php echo $row[2];?></i></h4>
                      </div>
                    </div>
                  </div>
                  <hr><hr>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form class="form" novalidate="">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Work Organization-:<?php echo $row[4];?></label>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label>DOB-:<?php echo $row[3];?></label>
                                </div>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Faculty ID-:<?php echo $row[2];?></label>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Gender-:<?php echo $row[5];?></label>
                                  </div>
                                </div>
                              </div>
                              <br><br>
                              <div class="container">
                                <div class="row">
                                   <div class="col-md-12">
                                         <div class="table-responsive">
                                        <table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
                                        <tr style="background-color: yellow;"><td colspan="5" style="font-weight: bolder; color: blue; font-size: 20px;"><i><u>Teaching Subject With Section Wise</u></i></td></tr>
                                        <tr><td><b>S.No.</b></td><td><b>Semester</b></td><td><b>Branch</b></td><td><b>Section</b></td><td><b>Subject</b></td></tr>
                                         <?php
                            $i=0;
                            while($row2= $rs2->fetch_array())
                            {
                         	$i=$i+1;
                            ?>
							<?php if($row2[12]==0){$row2[12]="--";$row2[13]="--";$row2[14]="--";$row2[15]="--";} ?>
                            <tr><td><?php echo $i;?></td><td><?php echo $row2[12];?></td><td><?php echo $row2[13];?></td><td><?php echo $row2[14];?></td><td><?php echo $row2[15];?></td></tr>
							<?php if($row2[16]==0){break;} ?>
							<tr><td><?php echo $i+1;?></td><td><?php echo $row2[16];?></td><td><?php echo $row2[17];?></td><td><?php echo $row2[18];?></td><td><?php echo $row2[19];?></td></tr>
							<?php if($row2[20]==0){break;} ?>
							<tr><td><?php echo $i+2;?></td><td><?php echo $row2[20];?></td><td><?php echo $row2[21];?></td><td><?php echo $row2[22];?></td><td><?php echo $row2[23];?></td></tr>
                            <?php
                            }
                            ?>
                                        </table>
                                         </div>
                                   </div>
                                   
                              </div>    
                        </div>

                              <hr><hr>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Address-:<?php echo $row[6];?></label>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>City-:<?php echo $row[7];?></label>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>State-:<?php echo $row[8];?></label>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Pincode-:<?php echo $row[9];?></label>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </form>
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
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>

</body>
</html>
