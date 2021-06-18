<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");


$email = $_SESSION['email'];
//echo $email;

$s= "select * from hod where Email='$email'";
     $rs=  $con->query($s); 
     $row= $rs->fetch_array();

//echo $row[4];
$s1= "select * from staff where (Branch1='$row[4]' or Branch2='$row[4]' or Branch3='$row[4]') ORDER by Name";
     $r1=  $con->query($s1); 
	 //$row1= $r1->fetch_array();
	 
//echo $row1[0];

$s2= "select * from staff where (Branch1='$row[4]' or Branch2='$row[4]' or Branch3='$row[4]') ORDER by Name";
     $r2=  $con->query($s2); 


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

    <!--<div class="vertical"></div>-->

    <div class="container mt-3">
      <div class="row flex-lg-nowrap">
        <div class="col" style="font-size: 5px;">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body" style="background: seashell; border:3px solid black;">
                      <div class="row"style="text-align:center">
                          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-12" >
                              <h1 style=" color: darkgoldenrod; font-weight: bolder;"><i>Delete Faculty</i></h1>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
<form action="delete_faculty_hod_dashboard_data.php" method="post" enctype="multipart/form-data">
<div>
    <div class="container">
        <div class="row flex-lg-nowrap">
          <div class="col" style="font-size: 15px;">
            <div class="row">
              <div class="col mb-3">
                <div class="card">
                  <div class="card-body" style="background: seashell; border:3px solid black;">
                    <div class="e-profile">
                      <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <div class="row">
                              <div class="col">
                                <div class="row">
									<div class="col-md-6">
                                            <div class="form-group">
                                              <label>Select Faculty Email ID</label>
											  <select class="form-control" name="facemail" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
											             <?php
while($row1= $r1->fetch_array())
{
?>
<option value="<?php echo $row1[10];?>"  style="color: teal;"><?php echo $row1[10];?></option>
<?php
}
?>
	                                          </select>
                                            </div>
                                          </div>
									<div class="col-md-6">
                                      <div class="form-group">
                                        <label>Select Faculty Employee ID</label>
                                        <select class="form-control" name="facid" required="" style="font-size:15px;">
											  <option value="" style="color: teal;">Choose..</option>
											             <?php
while($row2= $r2->fetch_array())
{
?>
<option value="<?php echo $row2[1];?>"  style="color: teal;"><?php echo $row2[1];?></option>
<?php
}
?>
	                                          </select>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
					<br><br>
					<div class="form-row">
	                <div class="col-6">
					<button name="def" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><h2>Delete Faculty</h2></button>
					</div>
	                <div class="col-6">
					<button name="deff" type="reset" class="btn btn-primary btn-lg btn-block login-btn"><h2>Cancel</h2></button>
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
			  <br><br><br><br><br><br><br><br>

<footer>
    <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 60px;">
        <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
          &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
          
      </div>
    </div>
  </footer>
</body>
</html>
