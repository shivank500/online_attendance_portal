 <!DOCTYPE>
<html>
<head>
    <title>Staff Registration Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<link rel="stylesheet" href="css/registration.css">
	<script type="text/javascript" src='js/staff_registration.js'></script>
	
</head>
</head>

<body style="background: radial-gradient(circle at 5% 55%, yellow, red,blue);">
<div>
<form style="margin-left: 18%; margin-right: 13%; position: relative;"class="jumbotron" action="staff_registration_data.php" method="post" enctype="multipart/form-data">

<div class="row" style="background-color:red;">
            <div class="col-2"></div>
			<div class="col-8" style="text-align:center; font-weight: bold; background-color:wheat; text-align:center; margin-top: -6%;"><h1 style="background-color:wheat; font-size:32px; margin-top:5px; margin-bottom:5px; padding-top:10px; padding-bottom:10px;" id="register_heading"><u>Register Yourself</u></h1></div>
			<div class="col-2"></div>
</div><br><br>
		
<!-- form row for roll number,branch,section and semester-->
    <div class="form-row">
    <div class="col-md-6 form-group">
    <label>Full Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
    </div>
    <div class="col-md-6 form-group">
    <label>Employee Id</label>
    <input type="text" name="eid" id="eid" class="form-control" placeholder="Employee Id" required="required">
    </div>
	</div>
    <!--form row for contact number and working organization--->
	<div class="form-row">
    <div class="col-md-6 form-group">
    <label>Contact Number</label>
    <input type="text" name="cn" id="cn" class="form-control" placeholder="Contact Number" required="required">
    </div>
    <div class="col-md-6 form-group">
    <label>Working Organization</label>
    <input type="text" name="wo" id="wo" class="form-control" placeholder="Working Organization" required="required">
    </div>
    </div>
	<div class="form-row">
	<div class="col-md-4 form-group">
	<label>Birth Date(MM/DD/YY)</label>
	<div class="form-row">
	<div class="col-md-12 form-group">
	<input type="date" name="dob" id="dob" class="form-control" required="required" style="color:red; font-weight:bolder;">
</div>
</div>
</div>
<div class="col-md-4 form-group">
<label>Gender</label>
    <div>
        <select class="form-control" name="gender" id="gen" style="color:red; font-weight:bolder;">
            <option selected>Gender</option>
            <option value="Male">Male</option>
			<option value="Female">Female</option>
            </select>
        </div>
    </div>
	</div>
	<div class="row">
    <div class="col-md-12">
    <label>Address</label>
    <input type="text" name="ad" id="ad" class="form-control" placeholder="Street address" required="required">
    </div>
    <div class="col-md-4 form-group">
        <br>
    <input type="text" name="city" id="city" class="form-control" placeholder="City" required="required">
    </div>
    <div class="col-md-4 form-group">
        <br>
    <input type="text" name="state" id="state" class="form-control" placeholder="State" required="required">
    </div>
    <div class="col-md-4 form-group">
        <br>
    <input type="text" name="zip" id="zip" class="form-control" placeholder="Pincode" required="required">
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <label>Faculty's Email Id</label>
    <input type="email" name="email" id="em" class="form-control" placeholder="Email Id" required="required">
    </div>
    </div>
    <br><br>
    <div class="form-row">
        <div class="col-6">
        <button type="submit" name="str" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
        </div>
        <div class="col-6">
        <button type="reset" class="btn btn-primary btn-lg btn-block login-btn">Reset</button>
        </div>
      </div>
</form>
</div>
<footer>
    <div class="row bg-dark text-white text-center ml-3 mr-3 mb-1">
        <div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
          &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
          
      </div>
    </div>
  </footer>
  <script>
$(document).ready(function(){
	$("#cn").on("blur",function(e){
		var t=document.getElementById("cn").value;
		if(t.length!=10)
		{
		alert("Please Fill Correct Valid Contact Number");
		}
	});
	
	
});
</script>
</body>
</html>