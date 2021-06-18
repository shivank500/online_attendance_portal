<header>
    <div class="container-fluid">
        <div class="row">
        <div class="col-2 p2"  style="background-image:radial-gradient(white,white,blue)"><img src="images/logoABESEC.png" height="100px" width="85%" alt="Image not uploaded"></img></div>
        <div class="col-10 text-center pt-3" id="heading"><marquee behavior="alternate" direction=""><h1 id="header" style="font-family:Muli-Regular; font-weight:900; font-size: 50px; color:black;"> ABES Engineering College</h1></marquee></div>
        </div>
        </div>
		<div class="row" style="background-color:black;">
		<div class="col-2"></div>
            <div class="col-8"><a href="#" class="nava m-auto" style="font-weight: bold; background-color:wheat; text-align:center;"><h1 style="background-color:wheat; font-size:32px; margin-top:5px; margin-bottom:5px; padding-top:10px; padding-bottom:10px; border-radius:50%;color:black;" id="header2">Welcome, <?php echo $row[0];?></h1></a></div>
			<div class="col-2"></div>
		</div>
		<div class="row" style="background-color:black;">
		<div class="col-1"></div>
        <div class="navbar navbar-expand-md navbar-dark col-10 mt-3 mb-5" style="background-color:lightyellow;">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" style="background-color:black;">
            <span class="navbar-toggler-icon" style="background-color:red;"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav pr-5">
          <li class="nav-item pr-5 ml-5" ><a href="home_hod_dashboard.php" class="nav-link" style="color: black; font-weight: bold;">Home</a></li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pr-5 ml-5" href="#" data-toggle="dropdown" style="color:black; font-weight: bold;">Student</a>
              <ul class="dropdown-menu">
                <li><a href="add_student_hod_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: #b0c4de;">ADD Students</a></li>
                <li><a href="delete_student_hod_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow;">Delete Students</a></li>
              </ul>	
      </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pr-5 ml-5" href="#" data-toggle="dropdown" style="color:black; font-weight: bold;">Faculty</a>
              <ul class="dropdown-menu">
                <li><a href="delete_faculty_hod_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Delete Faculty</a></li>
                <li><a href="#" class="dropdown-item text-info" style="font-weight: bold; background-color:lightyellow;">Update Faculty</a></li>
              </ul>	
      </li>
          <li class="nav-item pr-5 ml-5" ><a href="mapping_hod_dashboard.php" class="nav-link" style="color: black; font-weight: bold;">Faculty Mapping</a></li>
		  <li class="nav-item pr-5 ml-5" ><a href="#" class="nav-link" style="color: black; font-weight: bold;">Update News</a></li>
		  <li class="nav-item pr-5 ml-5" ><a href="#" class="nav-link" style="color: black; font-weight: bold;">Receive Complaints</a></li>
		  <li class="nav-item pr-5 ml-5" ><a href="logout.php" class="nav-link" style="color: black; font-weight: bold; background-color:red;"><img src="images/l4.png" height="30px" width="70px" alt="Image not uploaded"></img></a></li>
        </ul>
          </div>
      </div>
	  </div>
	  <div class="col-1"></div>
</header>