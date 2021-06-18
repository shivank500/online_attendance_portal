<?php   

session_start();

include("dbconnection.php");

$email = $_SESSION['email'];

$s= "select * from hod where Email='$email'";
     $rs=  $con->query($s); 
     $row= $rs->fetch_array();
	 
$s1= "select * from staff ORDER by Name";
     $rs1=  $con->query($s1); 
	 
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

<?php include("header_hod.php");?>

<div class="container mt-4">
      <div class="row flex-lg-nowrap">
        <div class="col" style="font-size: 5px;">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body" style="background: seashell;">
                      <div class="row"style="text-align:center">
                          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                              <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>Faculty Mapping</i></h1>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<form action="mapping_hod_dashboard_data.php" method="post" enctype="multipart/form-data">



    <div class="container" style="background-color:orange;">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
            <div class="row">
              <div class="col mb-1">
                <div class="card">
                  <div class="card-body" style="background: seashell;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
							<div class="col-3"></div>
							<div class="col-md-6">
                                            <div class="form-group">
                                            <label style="font-size:17px; font-weight:600;"><i>Select Faculty Email-ID</i></label>
	                                        <select class="form-control" name="fac_email" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
											             <?php
														while($row1= $rs1->fetch_array())
                                                        {
													    ?>
			                                             <option value="<?php echo $row1[10];?>"  style="color: teal;"><?php echo $row1[10];?></option>
                                                        <?php
                                                        }
														?>
	                                          </select>
											  </div>
                                            </div>
											</div><br><br>
											<div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Semester</i></label>
									  <select class="form-control" name="semester1" id="semester"  required="required" style="font-size:16px;">
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
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Branch</i></label>
	<select class="form-control" name="branch1" id="branch" required="required" style="font-size:16px;">
		    <option value="">Choose..</option>
			<option value="Computer Science & Engineering">Computer Science & Engineering</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science & Information Technology Engineering">Computer Science & Information Technology Engineering</option>
	     </select>
                                    </div>
                                  </div>
								  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Section</i></label>
	<select class="form-control" name="section1" id="section" required="required" style="font-size:16px;">
		    <option >Choose..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
	     </select>
                                        </div>
                                      </div>									  
							  
							  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Subject-1</i></label>
										  <input class="form-control" type="text" name="sub1" required="">
		    
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
	
	<div class="container" style="background-color:yellow;">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
            <div class="row">
              <div class="col mb-1">
                <div class="card">
                  <div class="card-body" style="background: seashell;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Semester</i></label>
									  <select class="form-control" name="semester2" id="semester" style="font-size:16px;">
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
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Branch</i></label>
	<select class="form-control" name="branch2" id="branch" style="font-size:16px;">
		    <option value="">Choose..</option>
			<option value="Computer Science & Engineering">Computer Science & Engineering</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science & Information Technology Engineering">Computer Science & Information Technology Engineering</option>
	     </select>
                                    </div>
                                  </div>
								  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Section</i></label>
	<select class="form-control" name="section2" id="section" style="font-size:16px;">
		    <option value="">Choose..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
	     </select>
                                        </div>
                                      </div>
									  
									  
									<div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Subject-2</i></label>
										  <input class="form-control" type="text" name="sub2">
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
	
	<div class="container" style="background-color:lightgreen;">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background-color:cornsilk;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Semester</i></label>
									  <select class="form-control" name="semester3" id="semester" style="font-size:16px;">
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
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label style="font-size:17px; font-weight:600;"><i>Select Branch</i></label>
	<select class="form-control" name="branch3" id="branch" style="font-size:16px;">
		    <option value="">Choose..</option>
			<option value="Computer Science & Engineering">Computer Science & Engineering</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science & Information Technology Engineering">Computer Science & Information Technology Engineering</option>
	     </select>
                                    </div>
                                  </div>
								  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Section</i></label>
	<select class="form-control" name="section3" id="section" style="font-size:16px;">
		    <option value="">Choose..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
	     </select>
                                        </div>
                                      </div>
									  
									  <div class="col">
                                        <div class="form-group">
                                          <label style="font-size:17px; font-weight:600;"><i>Select Subject-3</i></label>
										  <input class="form-control" type="text" name="sub3">
                                        </div>
                                      </div>									  
                              </div>
							  
                            </div>
                        </div>
                      </div>
                    </div>
                  </div><br><br>
	<div class="form-row">
	  <div class="col-6">
	  <button type="submit" name="mapp" class="btn btn-primary btn-lg btn-block login-btn" style="font-size:18px;">Submit</button>
	  </div>
	  <div class="col-6">
	  <button type="reset" class="btn btn-primary btn-lg btn-block login-btn" style="font-size:18px;">Reset</button>
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
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 10px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
