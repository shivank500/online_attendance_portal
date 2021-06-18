<?php   

include("dbconnection.php");


$s= "select * from staff ORDER by Name";
     $rs=  $con->query($s); 

$s1= "select * from hod ORDER by Name";
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

<link rel="stylesheet" href="css/hod_dashboard.css">
<script type="text/javascript" src='js/student_dashboard1.js'></script>
<script type="text/javascript" src='js/student_dashboard2.js'></script>
</head>
<body style="background:#778899;">

<?php include("header_admin.php");?>

<div class="row">
<div class="col-2"  style="color:white;">
<div class="row-12 mt-5">
<img src="images/1a.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/1b.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/1c.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
<div class="row-12 mt-5">
<img src="images/7.JPG" height="100px" width="100%" alt="Image not uploaded" ></img>
</div>
</div>
    
<div class="col-5">

<div class="row-6">	
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="table-responsive"><br><br>
<table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
<tr style="background-color: green;"><td colspan="3" style="font-weight: bolder; color: white; font-size: 20px;"><i><u>List of HOD</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>HOD Name</b></td><td><b>Department</b></td></tr>
<?php
$i=0;
while($row1= $rs1->fetch_array())
{
	$i=$i+1;
?>
<tr><td><?php echo $i;?></td><td><?php echo $row1[0];?></td><td><?php echo $row1[4];?></td></tr>
<?php
}
?>
</table>
</div><a href="download_hod_list_admin_dashboard.php" style="text-align:center; color:white;"><h2>Click here to Download List</h2></a>
</div>
</div>    
</div>
</div>

<div class="row-6">	
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="table-responsive"><br>
<table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
<tr style="background-color: violet;"><td colspan="3" style="font-weight: bolder; color: white; font-size: 20px;"><i><u>List of Branch's</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>Branch</b></td><td><b>No.of Seats</b></td></tr>
<tr><td>1</td><td>Computer Science & Engineering</td><td>180</td></tr>
<tr><td>2</td><td>Information Technology</td><td>180</td></tr>
<tr><td>3</td><td>Electronics and Communication Engineering</td><td>180</td></tr>
<tr><td>4</td><td>Mechanical Engineering</td><td>180</td></tr>
<tr><td>5</td><td>Civil Engineering</td><td>180</td></tr>
<tr><td>6</td><td>Computer Science & Information Technology Engineering</td><td>180</td></tr>
</table>
</div><a href="download_branch_list_admin_dashboard.php" style="text-align:center; color:white;"><h2>Click here to Download List</h2></a>
</div>
</div>    
</div>
</div>
</div>

<div class="col-5">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="table-responsive"><br><br>
<table class="table" border="2" style="font-size: 15px; text-align: center; background-color:cornsilk;">
<tr style="background-color: skyblue;"><td colspan="4" style="font-weight: bolder; color: white; font-size: 20px;"><i><u>List of Faculty</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>Faculty Name</b></td><td><b>Faculty E-Mail</b></td></tr>
<?php
$i=0;
while($row= $rs->fetch_array())
{
	$i=$i+1;
?>
<tr><td><?php echo $i;?></td><td><?php echo $row[0];?></td><td><?php echo $row[10];?></td></tr>
<?php
}
?>
</table>
</div><a href="download_faculty_list_admin_dashboard.php" style="text-align:center; color:white;"><h2>Click here to Download List</h2></a>
</div>
</div>    
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
