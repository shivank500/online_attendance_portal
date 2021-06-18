<?php   

session_start();
if(!isset($_SESSION['email']))
	header("location:login.php");

include("dbconnection.php");

$email = $_SESSION['email'];

$s= "select * from hod where Email='$email'";
     $rs=  $con->query($s); 
     $row= $rs->fetch_array();

$s1= "select * from staff where (Branch1='$row[4]' or Branch2='$row[4]' or Branch3='$row[4]') ORDER by Name";
     $r1=  $con->query($s1);

$s2= "select * from student where (Branch='$row[4]') ORDER by Semester";
     $r2=  $con->query($s2);	 

$_SESSION['fs']="";
$_SESSION['sem']="";
$_SESSION['sec']="";
$_SESSION['branch']="";

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

<link rel="stylesheet" href="css/hod_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body style="background: #778899;">

<?php include("header_hod.php");?>

<div class="row">
<div class="col-md-3 col-sm-6 col-xs-6"  style="color:white;">
<div class="row-12 mt-5">
<img src="images/7.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/2.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/3.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/6.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
</div>
    

<div class="col-md-8 col-sm-6">
<div class="container">
<div class="table-responsive"><br><br>
<table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
<tr style="background-color: yellow;"><td colspan="4" style="font-weight: bolder; color: black; font-size: 20px;"><i><u>List of Faculty of My Department</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>Faculty Name</b></td><td><b>Faculty E-Mail</b></td><td><b>Department</b></td></tr>
<?php
$i=0;
while($row1= $r1->fetch_array())
{
	$i=$i+1;
?>
<tr><td><?php echo $i;?></td><td><?php echo $row1[0];?></td><td><?php echo $row1[10];?></td><td><?php echo $row[4];?></td></tr>
<?php
}
?>
</table>
</div><a href="download_faculty_list_hod_dashboard.php" style="text-align:center; color:white;"><h2>Click here to Download Faculty List</h2></a>
</div>
</div>
</div>

<div class="row">
<div class="col-1"></div>
<div class="col-10">
<div class="container">
<div class="table-responsive"><br><br>
<table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
<tr style="background-color: yellow;"><td colspan="6" style="font-weight: bolder; color: black; font-size: 20px;"><i><u>List of Students of My Department</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>Student Name</b></td><td><b>Student E-Mail</b></td><td><b>Semester</b></td><td><b>Roll Number</b></td><td><b>Contact Number</b></td></tr>
<?php
$i=0;
while($row2= $r2->fetch_array())
{
	$i=$i+1;
?>
<tr><td><?php echo $i;?></td><td><?php echo $row2[0];?></td><td><?php echo $row2[1];?></td><td><?php echo $row2[5];?></td><td><?php echo $row2[2];?></td><td><?php echo $row2[10];?></td></tr>
<?php
}
?>
</table>
</div><a href="download_student_list_hod_dashboard.php" style="text-align:center; color:white;"><h2>Click here to Download Student List</h2></a>
</div>
</div>
</div>

<footer>
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: 10px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
