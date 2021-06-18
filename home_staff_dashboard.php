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
	 
$month="";
$month2="";
$seme="";
$date1="";
$date2="";


$_SESSION['seme']= "5";
$_SESSION['month']= "10";
$_SESSION['month2']="October";
$_SESSION['date1']="2020-01-01";
$_SESSION['date2']="2020-01-01";
$_SESSION['udates']="2020-09-06";
$_SESSION['datesss']="";
$_SESSION['lecturesss']="";
$_SESSION['fs']="";
$_SESSION['sem']="";
$_SESSION['branch']="";
$_SESSION['sec']="";
$_SESSION['sub']="";
$_SESSION['lecture']="";
$_SESSION['datess']="";
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

<link rel="stylesheet" href="css/staff_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

<?php include("header_staff.php");?>
<br><br>
<div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2 ml-3 mb-5 mt-5" style="margin-top: -20px;"><img src="<?php echo $row[11]; ?>" height="100%" width="100%" style=" border: 7px solid blue; box-shadow:10px 10px 0px 0px violet; border-radius: 10%;"></img></div>
	<div class="col-sm-7 col-md-6 col-lg-6 col-xl-8" style="margin: auto;">
        <fieldset style="border:6px groove black;border-radius:20px;height:100%;width:100%;background-color:seashell">
            <p align='center' style="color: blue; font-size: 40px; font-weight: bold;">Batches....</p><hr style="background-color: red;"><hr style="background-color: blue;"><hr style="background-color: greenyellow;">
            <h2 style="font-size: 30px;">
                <br>
                <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                       <div class="col-md-12">
                             <div class="table-responsive">
                            <table class="table" style=" font-size: 20px; text-align: center;" border="4">
                            <tr><td>S.No.</td><td>Semester</td><td>Branch</td><td>Section</td><td>Subject</td></tr>
                            <tr><td></td><td></td><td></td><td></td><td></td></tr>
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
                            </table><br>
                             </div>
                       </div>
                       
                    </div>
                  </div>
                <br><br>
            </h2>
        </fieldset>
    </div>

</div>
<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 70px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
