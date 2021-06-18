<?php

session_start();
//if(!isset($_SESSION['email']))
	//header("location:login.php");

include("dbconnection.php");

$hodemail = $_SESSION['hodemail'];

//echo $_SESSION['hodemail'];
//echo $hodemail2;

$s= "select * from hod ORDER by Name";
     $rs=  $con->query($s); 

$sq2 = "SELECT * FROM hod WHERE Email='$hodemail'";
     $rs2=  $con->query($sq2); 
	 $row2= $rs2->fetch_array();
	 
	 //echo $row2[0];echo $row2[1];echo $row2[2];
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

<link rel="stylesheet" href="css/delete_faculty_hod_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

<?php include("header_admin.php");?>
    <!--<div class="vertical"></div>-->

    <div class="container mt-3">
      <div class="row flex-lg-nowrap">
        <div class="col" style="font-size: 5px;">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body" style="background:seashell; border:3px solid black;">
                      <div class="row"style="text-align:center">
                          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                              <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>UPDATE - H.O.D.</i></h1>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
<form action="update_hod_admin_dashboard_data.php" method="post" enctype="multipart/form-data">
<div>
    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 18px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background:seashell; border:3px solid black;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                              <div class="col">
                                <div class="row">
								<div class="col-3"></div>
								<div class="col-md-6">
                                            <div class="form-group">
                                            <label>Select HOD Email ID</label>
											  <select class="form-control" name="hodemail" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
											             <?php
														while($row= $rs->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row[1];?>"  style="color: teal;"><?php echo $row[1];?></option>
                                                        <?php
                                                        }
														?>
	                                          </select></div>
                                            </div>
										   <div class="col-3"></div>
										   <div class="col-3"></div>
	                                      <div class="col-6">
					                      <button name="upd_hod" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Search</h2></button><br>
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
			  </form>

			  
			  <form action="update_hod_admin_dashboard_data2.php" method="post" enctype="multipart/form-data">
<div>
    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 18px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background:seashell; border:3px solid black;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                              <div class="col">
                                <div class="row">
								<div class="col-md-6">
                                            <div class="form-group">
                                            <label>HOD Name-:<?php echo $row2[0];?></label>
											  </div>
                                            </div>
								<div class="col-md-6">
                                            <div class="form-group">
                                            <label>HOD Email ID-:<?php echo $row2[1];?></label>
											  </div>
                                            </div>
										   <br><br><br>
										   <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Edit HOD Contact Number</label>
                                        <input class="form-control" type="text" name="ehodcn" placeholder="HOD Contact Number" required="required" value="<?php echo $row2[2];?>">
                                      </div>
                                    </div>
									<div class="col-md-4">
                                      <div class="form-group">
                                        <label>Edit HOD Employee ID</label>
                                        <input class="form-control" type="text" name="ehodid" placeholder="HOD Employee ID" required="required" value="<?php echo $row2[3];?>">
                                      </div>
                                    </div>
									<input type="hidden" value="<?php echo $hodemail ?>" name="eemail">
									<div class="col-md-4 form-group">
									<label>Select Department</label>
	<select class="form-control" name="edprt" id="branch" required="required" style="font-size:15px;">
		    <option  value="<?php echo $row2[4];?>"><?php echo $row2[4];?></option>
			<option value="Computer Science & Engineering">Computer Science & Engineering</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science & Information Technology Engineering">Computer Science & Information Technology Engineering</option>
	     </select>
								</div>
									<div class="col-md-3"></div>
									<div class="col-md-6">
					                      <button name="eupd_hod" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Submit</h2></button><br>
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
	
			  </div>
			  </form>

<footer>
    <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 120px;">
        <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
          &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
          
      </div>
    </div>
  </footer>
</body>
</html>
