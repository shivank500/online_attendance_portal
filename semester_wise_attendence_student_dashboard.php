<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");


include("dbconnection.php");


$email = $_SESSION['email'];
$seme = $_SESSION['seme'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();
	 
$s2= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='present' and Semester='$seme')";
     $rs2=  $con->query($s2); 
	 $row2= $rs2->fetch_array();
	 //echo $row2[0];
	 
$s3= "select COUNT(Status) from take_attendance where (S_Email='$email' and Status='absent' and Semester='$seme')";
     $rs3=  $con->query($s3); 
	 $row3= $rs3->fetch_array();
	 //echo $row3[0];
	 $A=$row2[0];
	 $S=$row3[0]+$row2[0];
	 
	 if($S==0){$A="Not Valid";$S="Not Valid";$P="Not Valid";}
	 else{$P=$row2[0]/$S*100;}
	 
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

<link rel="stylesheet" href="css/semester_wise_attendence_student_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>


</head>
<body style="background: #778899;">
 
 <?php include("header_student.php");?>

<form action="semester_wise_attendence_student_dashboard_data.php" method="post" enctype="multipart/form-data">
<div class="container" style="margin-top: 50px;">
    <div class="row flex-lg-nowrap">
      <div class="col" style="font-size: 5px;">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body" style="background-color:seashell; border:3px solid black;">
                    <div class="row"style="text-align:center">
                        <div class="col d-flex flex-column flex-sm-row  mb-12" >
                            <div class="col-sm-6 col-md-9 col-lg-9 col-xl-9">
                                <h2 style=" color: black; font-weight: bolder; font-size: 24px;"><i><u>Semester Wise Attendance</u></i></h2>
								<h2 style=" color: black; font-weight: bolder; font-size: 24px;"><i><u>Semester--><?php echo $seme;?></u></i></h2>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3" style="font-size:20px; color: black; font-weight: bolder;">
	     <label>Select Semester</label>
	     <select class="form-control" name="seme" required="required" style="font-size:15px;">
		    <option value="">Choose..</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
	     </select>
		 <button class="btn btn-primary" type="submit" name="stusem">Choose..</button>
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
                                                         <tr><td><b>S.No.</b></td><td><b>Present Lecture <br> in Selected Semester</b></td><td><b>Total Lecture <br> in Selected Semester</b></td><td><b>Total Attendance %<br> in Selected Semester</b></td></tr>
                                                        <tr><td>1</td><td><?php echo $A;?></td><td><?php echo $S;?></td><td><?php echo $P;?> %</td></tr>
                                                        </table>
                                                         </div><a href="download_semester_wise_attendence_student_dashboard.php"><h2>Click here to Download Attendance</h2></a>
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
<br><br><br><br><br><br><br>
<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 30px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
</body>
</html>
