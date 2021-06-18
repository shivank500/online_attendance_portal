<header>
    <div class="container-fluid">
        <div class="row">
        <div class="col-2 p2"  style="background-image:radial-gradient(white,white,blue)"><img src="images/logoABESEC.png" height="100px" width="85%" alt="Image not uploaded"></img></div>
        <div class="col-10 text-center text-white pt-3 pb-1" id="heading"><marquee behavior="alternate" direction=""><h1 id="header" style="font-family:Muli-Regular; font-weight:900; font-size: 50px; color:black;"> ABES Engineering College</h1></marquee></div>
        </div>
        </div>
		<div class="row" style="background-color:black;">
		<div class="col-2"></div>
            <div class="col-8"><a href="viewprofile_staff_dashboard.php" class="nava m-auto" style="color: black; font-weight: bold; background-color:wheat; text-align:center;"><h1 style="background-color:wheat; font-size:32px; margin-top:5px; margin-bottom:5px; padding-top:10px; padding-bottom:10px;" id="header2">Welcome, <?php echo $row[0];?></h1></a></div>
			<div class="col-2"></div>
		</div>
		<div class="row" style="background-color:gray;">
		<div class="col-1"></div>
        <div class="navbar navbar-expand-md navbar-dark col-10 mt-1 mb-1" style="background-color:gray;">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" style="background-color:black;">
            <span class="navbar-toggler-icon" style="background-color:red;"></span>
            </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav pr-5">
          <li class="nav-item pr-5" ><a href="home_staff_dashboard.php" class="nav-link" style="color: white; font-weight: bold;">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color: white; font-weight: bold;">My Profile</a>
                <ul class="dropdown-menu">
                <li><a href="viewprofile_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow;">View Profile</a> </li>
                <li><a href="updateprofile_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Update Profile</a> </li>
                </ul>	
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color:white; font-weight: bold;">Student's</a>
              <ul class="dropdown-menu">
                <li><a href="add_student_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: lightyellow;">ADD Students</a></li>
                <li><a href="delete_student_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Delete Students</a></li>
                <li><a href="views_student_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow;">View's Students</a></li>
                <li><a href="#" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Update Students</a></li>
              </ul>	
      </li>
        
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color: white; font-weight: bold;">Attendance</a>
              <ul class="dropdown-menu">
                <li><a href="take_attendance.php" class="dropdown-item" style="font-weight: bold; background-color: lightyellow;">Take Attendance</a></li>
                <li><a href="update_attendance_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Update Attendance</a></li>
              </ul>	
      </li>
		  
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color: white; font-weight: bold;">View Student's <br> Attendance</a>
                <ul class="dropdown-menu">
                  <li><a href="todaysattendence_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: lightyellow;">Today's Attendance</a> </li>
                  <li><a href="date_wise_attendence_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Date Wise Attendance</a> </li>
                  <li><a href="month_wise_attendence_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:  lightyellow;">Month Wise Attendance</a> </li>
                  <li><a href="semester_wise_attendence_staff_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:#b0c4de;">Semester Wise Attendance</a> </li>
                </ul>	
        </li>
        <li class="nav-item" ><a href="leave_staff_dashboard.php" class="nav-link pr-5" style="color: white; font-weight: bold;">Leave Verification</a></li>
        <li class="nav-item" ><a href="complaint_staff_dashboard.php" class="nav-link pr-5" style="color:white; font-weight: bold;">Complaint Issue</a></li>
		<li class="nav-item" ><a href="chatbox\index.php" class="nav-link pr-5" style="color:white; font-weight: bold;">Chatting</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link pr-5"><img src="images/l4.png" height="30px" width="70px" alt="Image not uploaded"></img></a></li>
        </ul>
          </div>
      </div>
	  </div>
	  <div class="col-1"></div>
</header>