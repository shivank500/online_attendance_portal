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

    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src='js/index.js'></script>
    <script type="text/javascript" src='js/index1.js'></script>
    <script type="text/javascript" src='js/index2.js'></script>

    <title>Attendance Portal</title>
</head>
<body>
  <div>
    <div class="row ml-3 mr-3">
    <div class="col-2"  style="background-image:radial-gradient(white,white,blue)"><img src="images/logoABESEC.png" height="100px" width="100%" alt="Image not uploaded" ></img></div>
    <div class="col-10 text-center text-white pt-3 pb-1" id="heading"><marquee behavior="alternate" direction=""><h1 id="header" style="font-family:Muli-Regular; font-weight:900; font-size: 50px; color:black;"> ABES Engineering College</h1></marquee></div>
    </div>
     </div>
     <div class="button_pic">
    <div id="login"><a href="login.php" target='_blank' class="trigger-btn"><img src="images/log.png" alt=""></a></div>
    <div>
    <div id="register"><img src="images/reg.png" alt=""></div>
    <div id="register1">
    </div>
    </div>
  </div>
    <div class="col-sm-12">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/ABES.jpg" alt="Los Angeles" width="100%" height="570">
        <div class="carousel-caption">
            <h2 style="font-weight: bolder;"><u>Attend Today and Acheive Tomorrow</u></h2>
          </div>
        </div>
            <div class="carousel-item">
              <img src="images/wel.jpg" alt="Chicago" width="100%" height="570">
        <div class="carousel-caption">
            <h2 style="font-weight: bolder;"><u>Three most Important A's For a Perfect Student<br>'''Attendance--Attention--Action'''</u></h2>
          </div>
        </div>
            <div class="carousel-item">
              <img src="images/at2.jpg" alt="New York" width="100%" height="570">
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
    <footer>
      <div class="row bg-dark text-white text-center mt-1 ml-3 mr-3">
        <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow;">
            &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
        </div>
      </div>
    </footer>

</body>
</html>