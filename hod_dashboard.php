<?php

session_start();

include("dbconnection.php");

$email = $_SESSION['email'];

$s1= "select * from hod where Email='$email'";
     $rs=  $con->query($s1); 
     $row= $rs->fetch_array();


//echo $email;

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
<script type="text/javascript" src='js/student_dashboard2.js'></script>

</head>
<body>

<?php include("header_hod.php");?>

<div class="row jumbotron" style="margin-top: -20px;">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2 ml-3 mb-5" style="margin-top: -20px;"><img src="<?php echo $row[17]; ?>" height="100%" width="100%" style=" border: 5px solid red; box-shadow:10px 10px 0px 0px yellow; border-radius: 10%;"></img></div>
    <!--<div class="vertical"></div>-->
    <div class="col-sm-10 col-md-10 col-lg-6 col-xl-8" style="margin: auto; margin-top:-30px;">
        <fieldset style="border:10px groove blue;border-radius:20px;height:100%;width:100%;background-color:seashell">
            <legend align='center' style="color: darkorange; font-size: 40px; font-weight: bold;">My Status</legend><hr style="background-color: red;"><hr style="background-color: blue;"><hr style="background-color: greenyellow;">
			<?php date_default_timezone_set("Asia/Calcutta");
                                $now=new DateTime();?>
                                <h2 style="color:black; font-weight:bolder; text-align:center;"><i><b><?php echo $now->format('d-M-Y'); ?><br>Day-><?php echo $now->format('D'); ?></b></i></h2>
            <h2 style="font-size: 30px;">
                <br>
                <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                       <div class="col-md-12">
                             <div class="table-responsive">
                            <table class="table" style="font-size: 20px; text-align: center;" border="4">
                            <tr><td><b><i>Name</i></b></td><td><b><i>Email</i></b></td><td><b><i>Contact No.</i></b></td><td><b><i>Employee ID</i></b></td><td><b><i>Department</i></b></td></tr>
                            <tr><td></td><td></td><td></td><td></td><td></td></tr>
							<tr><td><?php echo $row[0];?></td><td><?php echo $row[1];?></td><td><?php echo $row[2];?></td><td><?php echo $row[3];?></td><td><?php echo $row[4];?></td></tr>
                            </table>
							<h2>Any Thoughts</h2>
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
  <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1" style="margin-top: -35px;">
      <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
        &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidence of Mr. Anand Kr. Srivastava
        
    </div>
  </div>
</footer>
    
</body>
</html>
