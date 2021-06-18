<?php

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");

$email = $_SESSION['email'];

$s1= "select * from student where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();
	 
	 
$month="";
$month2="";
$seme="";
$date1="";
$date2="";

$_SESSION['seme']= $row[5];
$_SESSION['month']= "10";
$_SESSION['month2']="October";
$_SESSION['date1']="2020-01-01";
$_SESSION['date2']="2020-01-01";

date_default_timezone_set("Asia/Calcutta");
$now=new DateTime();
$datt=$now->format('Y-m-d');
//echo $datt;
	
$s2= "select COUNT(Status) from take_attendance where (S_Email='$email' and Date(Date)='$datt' and Status='present')";
     $rs2=  $con->query($s2); 
	 $row2= $rs2->fetch_array();

$s3= "select COUNT(Status) from take_attendance where (S_Email='$email' and Date(Date)='$datt' and Status='absent')";
     $rs3=  $con->query($s3); 
	 $row3= $rs3->fetch_array();
	 
$s4= "select COUNT(Status) from take_attendance where (S_Email='$email' and Date(Date)='$datt' and Status='leave')";
     $rs4=  $con->query($s4); 
	 $row4= $rs4->fetch_array();
	 
$S=$row3[0]+$row2[0]+$row4[0];


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

<link rel="stylesheet" href="css/home_student_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>

<body style="background: #778899;">

<?php include("header_student.php");?>

<div class="row mt-5">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2 ml-3 mb-5 mt-5" style="margin-top: -20px;"><img src="<?php echo $row[17]; ?>" height="90%" width="100%" style=" border: 5px solid red; box-shadow:10px 10px 0px 0px white; border-radius: 10%;"></img></div>
	<div class="col-sm-7 col-md-6 col-lg-6 col-xl-8" style="margin: auto;">
        <fieldset style="border:6px groove black;border-radius:20px;height:100%;width:100%;background-color:seashell"><br><br>
            <h2 align='center' style="color: darkorange; font-size: 30px;;">Today's Attendance</h2><hr style="background-color: red;"><hr style="background-color: blue;"><hr style="background-color: greenyellow;">
			<?php date_default_timezone_set("Asia/Calcutta");
                                $now=new DateTime();?>
                                <h2 style="color:black; font-weight:bolder; text-align:center;"><i><b><?php echo $now->format('d-M-Y'); ?><br>Day-<?php echo $now->format('D'); ?></b></i></h2>
            <h2 style="font-size: 30px;">
                <br>
                <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                       <div class="col-md-12">
                             <div class="table-responsive">
                            <table class="table" style="font-size: 20px; text-align: center; margin-top:-2px;" border="4">
                            <tr><td>Total</td><td>Present</td><td>Absent</td><td>Leave</td></tr>
                            <tr><td></td?<td></td><td></td><td></td><td></td></tr>
                            <tr><td><?php echo $S ?></td><td><?php echo $row2[0] ?></td><td><?php echo $row3[0] ?></td><td><?php echo $row4[0] ?></td></tr>
                            </table>
                             </div><br>
                       </div>
                       
                    </div>
                  </div>
                <br><br>
            </h2>
        </fieldset>
    </div>
</div><br>
<footer>
    <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 70px;">
        <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
          &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
          
      </div>
    </div>
  </footer>
</body>
</html>
