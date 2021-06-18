<header>
    <div class="container-fluid">
        <div class="row">
        <div class="col-2 p2"  style="background-image:radial-gradient(white,white,blue)"><img src="images/logoABESEC.png" height="100px" width="85%" alt="Image not uploaded"></img></div>
        <div class="col-10 text-center text-white pt-3 pb-1" id="heading"><marquee behavior="alternate" direction=""><h1 id="header" style="font-family:Muli-Regular; font-weight:900; font-size: 50px; color:black;"> ABES Engineering College</h1></marquee></div>
        </div>
        </div> 

         
        <div class="navbar navbar-expand-md navbar-dark" style="background-color:gray;">				
            <a href="viewprofile_student_dashboard.php" class="navbar-brand nava m-auto" style="color: black; font-weight: bold; background-color:wheat;"><h1 id="header2">Welcome , <?php echo $row[0];?></h1></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color:gray;">
          <ul class="navbar-nav ml-auto pr-5">
          <li class="nav-item pr-5"><a href="home_student_dashboard.php" class="nav-link" style="color: white; font-weight: bold;">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color: white; font-weight: bold;">Profile</a>
                <ul class="dropdown-menu">
                <li><a href="viewprofile_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow; color:black;">View Profile</a> </li>
                <li><a href="updateprofile_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: #b0c4de;  color:black;">Update Profile</a> </li>
                </ul>	
        </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle pr-5" href="#" data-toggle="dropdown" style="color: white; font-weight: bold;">Attendance</a>
                  <ul class="dropdown-menu">
                    <li><a href="today_attendance_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: lightyellow; color:black;">Today's Attendance</a> </li>
                    <li><a href="subjectwise_attendance_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: #b0c4de; color:black;">Subject Wise Attendance</a> </li>
                    <li><a href="date_wise_attendence_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow; color:black;">Date Wise Attendance</a> </li>
                    <li><a href="month_wise_attendence_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color: #b0c4de; color:black;">Month Wise Attendance</a> </li>
                    <li><a href="semester_wise_attendence_student_dashboard.php" class="dropdown-item" style="font-weight: bold; background-color:lightyellow; color:black;">Semester Wise Attendance</a> </li>
                  </ul>	
          </li>
                  <li class="nav-item" ><a href="complain_student_dashboard.php" class="nav-link pr-5" style="color: white; font-weight: bold;">Complaint</a></li>
                  <li class="nav-item pr-5" ><a href="leave_student_dashboard.php" class="nav-link" style="color: white; font-weight: bold;">Apply Leave</a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link pr-5"><img src="images/l4.png" height="30px" width="70px" alt="Image not uploaded"></img></a></li>
                  <!--<li><a href="#" class="dropdown-item text-info" >Complain</a> </li>
                  <li><a href="#" class="dropdown-item text-info" >Logout</a> </li>-->
              </ul>
          </div>
      </div>
</header>