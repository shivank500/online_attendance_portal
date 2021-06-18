<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<link rel="stylesheet" href="css/login.css">
	<script type="text/javascript" src='js/index3.js'></script>

    <title>Attendance Portal</title>
	<style>
body {
  background-image: url('images/photo-1513151233558-d860c5398176.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>


    <div id="myModal" style="margin:auto 60px; margin-top:8%;">
      <div class="modal-dialog modal-login" style=" border:4px solid orange;">
        <div class="modal-content" style="background-color: beige;">
          <div class="modal-header">
            <img src="images/ABESEC.png" alt="Loaded" style="width: 50%; margin-top: -30px;">
            <p id="all" style="text-align: center; margin-top: -30px; font-family:serif; font-weight: bolder; color:red; font-size: 30px;">WELCOME<br>TO<br>ATTENDANCE<br>PORTAL</p>
          </div>
          <div class="modal-body">
            <form action="login_data.php" method="post">
              <div class="form-group">
			  
			  
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
			  <p style="color:red;"><?php 
							       if(isset($_SESSION['err']))
							  echo $_SESSION['err'];
                                session_destroy();?></p>
							       
                <button type="submit" name="sl" class="btn btn-primary btn-lg btn-block login-btn">LOGIN</button>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-dark">
            <a href="#" style="text-decoration-color: yellow;"><h5 style="color:white; font-weight: 700; font-size: 20px;">Forgot Password?</h5></a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>