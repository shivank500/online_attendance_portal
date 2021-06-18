<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");


include("dbconnection.php");


$email = $_SESSION['email'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();

$s2= "select * from login_all where User_Name='$email'";
     $rs2=  $con->query($s2); 
     $row2= $rs2->fetch_array();


$_SESSION['em']= $row[1];

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

<link rel="stylesheet" href="css/updateprofile_student_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

<?php include("header_student.php");?>

    <!--<div class="vertical"></div>-->
	<form action="updateprofile_student_data.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row flex-lg-nowrap">
        <div class="col" style="font-size: 5px;">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body" style="background-color:seashell; border:3px solid black;">
                      <div class="row"style="text-align:center">
                          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                              <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>Update Profile </i></h1>
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
                        <div class="col-12 col-sm-auto mb-3">
                          <div class="mx-auto" style="width: 140px;">
                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                              <img src="<?php echo $row[17];?>" height="100%" width="100%"  alt="Image not uploaded"></img>
                            </div>
							<div class="mt-2">
                                <input type="file" name="pic" id="pic" class="btn btn-info" style="width:100%;">
                            </div>
							<br>
							<input type="hidden" value="<?php echo $row[17];?>" name="pic" >
                          </div>
                        </div>
						
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                          <div class="text-center text-sm-left mb-2 mb-sm-0">
						  <br>
                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="font-size:22px; color:red;"><i>Name-:<?php echo $row[0];?></i></h4>
							<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="font-size:22px; color:blue;"><i>Email-:<?php echo $row[1];?></i></h4>
                            
                          </div>
                        </div>
                      </div>
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                          <form class="form" novalidate="">
                            <div class="row">
                              <div class="col">
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Branch</label>
                                      <input class="form-control" type="text" name="branch" placeholder="Branch" value="<?php echo $row[3];?>">
                                    </div>
                                  </div>
                                  <div class="col">
                                      <div class="form-group">
                                        <label>New Password</label>
                                        <input class="form-control" type="password" name="pass" placeholder="••••••" name="dob" value="<?php echo $row2[1];?>">
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Section</label>
                                        <input class="form-control" type="text" name="section" placeholder="Section" value="<?php echo $row[4];?>">
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Semester</label>
                                        <input class="form-control" type="text" name="semester" placeholder="Semester" value="<?php echo $row[5];?>">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Father Contact Number</label>
                                        <input class="form-control" type="text" name="fc" placeholder="Father Contact Number" value="<?php echo $row[7];?>">
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Mother Contact Number</label>
                                        <input class="form-control" type="text" name="mt" placeholder="Mother Contact Number" value="<?php echo $row[9];?>">
                                      </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                          <label>Student Contact Number</label>
                                          <input class="form-control" type="text" name="sc" placeholder="Sc" value="<?php echo $row[10];?>">
                                        </div>
                                      </div>
                                  </div>
        
                                  <div class="row">
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="ad" placeholder="Address" value="<?php echo $row[13];?>">
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="form-group">
                                        <label>State</label>
                                        <input class="form-control" type="text" name="state" placeholder="State" value="<?php echo $row[14];?>">
                                      </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                          <label>City</label>
                                          <input class="form-control" type="text" name="city" placeholder="City" value="<?php echo $row[15];?>">
                                        </div>
                                      </div>
									  <div class="col">
                                        <div class="form-group">
                                          <label>ZIP</label>
                                          <input class="form-control" type="text" name="zip" placeholder="ZIP" value="<?php echo $row[16];?>">
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit" name="su">Save Changes</button>
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
