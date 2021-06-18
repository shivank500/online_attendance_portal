<!DOCTYPE>
<html>
<head>
	<title>Student Registration Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<link rel="stylesheet" href="css/registration.css">
	<script type="text/javascript" src='js/student_registration.js'></script>
</head>
<body style="background: radial-gradient(circle at 5% 55%, yellow, red,blue);">
<div>
<form style="margin-left: 18%; margin-right: 13%; position: relative;" class="jumbotron" action="student_registration_data.php" method="post" enctype="multipart/form-data">
<div class="row" style="background-color:red;">
            <div class="col-2"></div>
			<div class="col-8" style="text-align:center; color: violet; font-weight: bold; background-color:wheat; text-align:center; margin-top: -6%;"><h1 style="background-color:wheat; font-size:32px; margin-top:5px; margin-bottom:5px; padding-top:10px; padding-bottom:10px; color:black;" id="register_heading"><u>Register Yourself</u></h1></div>
			<div class="col-2"></div>
</div><br><br>

<br>
	<div class="form-row">
	<div class="form-group col-md-6">
	 <label >Full Name </label>
	 <input type="text" class= "form-control" name="name" id="name" placeholder="Full Name" required="required">
     </div>
	 <div class="form-group col-md-6">
	 <label >E-Mail </label>
	 <input type="text" class= "form-control" name="email" id="email" placeholder="E-Mail" required="required">
     </div>
	 </div>
	 <div class="form-row">
	<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group">
	<label>Roll Number</label>
	<input type="text" name="rollno" id="rollno" class="form-control" placeholder="Roll Number" required="required">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group">
	<label>Branch</label>
	<select class="form-control" name="branch" id="branch" required="required" style="color:red; font-weight:bolder;">
		    <option value="">Choose..</option>
			<option value="Computer Science & Engineering">Computer Science & Engineering</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical Engineering</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science & Information Technology Engineering">Computer Science & Information Technology Engineering</option>
	     </select>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group">
	<label>Section</label>
	<select class="form-control" name="section" id="section" required="required" style="color:red; font-weight:bolder;">
		    <option >Choose..</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
	     </select>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group">
	<label>Semester</label>
	<select class="form-control" name="semester" id="semester"  required="required" style="color:red; font-weight:bolder;">
	<option >Choose..</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
	     </select>
	</div>
	</div>
	<div class="form-row">
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Father's Name</label>
	<input type="text" name="fn" id="fn" class="form-control" placeholder="Father's Name" required="required">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Father's contact number</label>
	<input type="text" name="fc" id="fc" class="form-control" placeholder="Father's contact number" required="required">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Mother's Name</label>
	<input type="text" name="mn" id="mn" class="form-control" placeholder="Mother's Name" required="required">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Mother's contact number</label>
	<input type="text" name="mt" id="mt" class="form-control" placeholder="Mother's contact number" required="required">
	</div>
	</div>
	<div class="form-row">
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Student's contact number</label>
	<input type="text" name="sc" id="sc" class="form-control" placeholder="Student's contact number" required="required">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
		<label>Birth Date(MM/DD/YY)</label>
		<input type="date" name="dob" class="form-control" required="required" style="color:red; font-weight:bolder;">
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 form-group">
	<label>Gender</label>
	<select class="form-control" name="gender" id="gender" required="required" style="color:red; font-weight:bolder;">
	<option >Choose..</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
	     </select>
		</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-12">
	<label>Address</label>
	<input type="text" name="ad" id="ad" class="form-control" placeholder="Street address" required="required">
	</div>
	</div>
	<div class="form-row">
	  <div class="col-6 form-group">
	 <label>City</label>
	 <input type="text" name="city" id="city" class="form-control" placeholder="City" required="required">
	 </div>
	  <div class="col-4 form-group">
	     <label>State</label>
	     <select class="form-control" name="state" id="state" required="required" style="color:red; font-weight:bolder;">
		    <option selected>Choose..</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="Uttarakhand">Uttarakhand</option>
			<option value="Other">Other</option>

	     </select>
	  </div>
	  <div class="col-2 form-group">
	 <label>Zip</label>
	 <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip">
	 </div>
	 </div>
	 <br><br>
	<div class="form-row">
	  <div class="col-6">
	  <button type="submit" name="sr" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
	  </div>
	  <div class="col-6">
	  <button type="reset" class="btn btn-primary btn-lg btn-block login-btn">Reset</button>
	  </div>
	</div>
</form>
</div>
<footer>
	<div class="row bg-dark text-white text-center mt-1 ml-3 mr-3 mb-1">
		<div class="col-md-12" style="font-weight: bolder; font-size: 20px; border:5px solid yellow">
		  &copy; 2020 Developed By Priyanka and Shivank Varshney Under the Guidance of Mr. Anand Kr. Srivastava
	  </div>
	</div>
  </footer>
  <script>
$(document).ready(function(){
	$("#fc").on("blur",function(e){
		var t=document.getElementById("fc").value;
		if(t.length!=10)
		{
		alert("Please Fill Correct Valid Contact Number");
		}
	});
	
	
});
</script>
<script>
$(document).ready(function(){
	$("#mt").on("blur",function(e){
		var t=document.getElementById("mt").value;
		if(t.length!=10)
		{
		alert("Please Fill Correct Valid Contact Number");
		}
	});
	
	
});
</script>
<script>
$(document).ready(function(){
	$("#sc").on("blur",function(e){
		var t=document.getElementById("sc").value;
		if(t.length!=10)
		{
		alert("Please Fill Correct Valid Contact Number");
		}
	});
	
	
});
</script>
</body>
</html>