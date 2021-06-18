<?php

session_start();
$_SESSION['hodemail']= "10";

//echo $_SESSION['hodemail'];
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
<body>

<?php include("header_admin.php");?>

<div class="row">
<div class="col-8">
<div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
			<li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/7.JPG" alt="Los Angeles" width="100%" height="500">
        </div>
            <div class="carousel-item">
              <img src="images/2.JPG" alt="Chicago" width="100%" height="500">
        </div>
            <div class="carousel-item">
              <img src="images/3.JPG" alt="New York" width="100%" height="500">
      </div>
	  <div class="carousel-item">
              <img src="images/4.JPG" alt="Chicago" width="100%" height="500">
        </div>
		<div class="carousel-item">
              <img src="images/5.JPG" alt="Chicago" width="100%" height="500">
        </div>
            <div class="carousel-item">
              <img src="images/6.JPG" alt="New York" width="100%" height="500">
      </div>
	  <div class="carousel-item">
              <img src="images/1.JPG" alt="Chicago" width="100%" height="500">
        </div>
	  
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
          </div>
        </div>
</div>
    
<div class="col-4">
	<h1>Any Message</h1>
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
