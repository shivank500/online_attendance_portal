<?php
$roomname=$_GET['roomname'];

include 'db.php'; 

$sql="SELECT * FROM rooms where roomname='$roomname'";
$result=mysqli_query($con,$sql);

if($result)
{
	//echo "a1";
	if(mysqli_num_rows($result)==0)
	{
		//echo "a2";
		//if(mysqli_query($con,$sql))
		{
			$msg="This Room does not Exists , try creating new room for Chat";
		    echo '<script language="javascript">';
		    echo 'alert("'.$msg.'");';  //not showing an alert box.;
		    echo 'window.location="http://localhost/chatbox";';
		    echo '</script>';
		}
	}
}
else
{
	//echo "a3";
	echo "Error:".mysqli_error($con);
}	

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyClass{
   height:350px;
overflow-y:scroll;   
	
}
</style>
</head>
<body>

<h2>Chat Messages-><?php echo $roomname; ?></h2>

<div class="container">
<div class="anyClass"> 
</div>
</div>


<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add Message"><br>
<button class="btn btn-primary" name="submitmsg" id="submitmsg">Send Message</button>

<script>

// Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});


setInterval(runFunction,1000);
function runFunction()
{
	$.post("htcont.php",{room:'<?php echo $roomname ?>'},function(data,status){document.getElementsByClassName('anyClass')[0].innerHTML=data;
	document.getElementsByClassName('container')[0].style.background = 'green';
	});
}

$(document).ready(function(){
	//alert("Web");
	$("#submitmsg").on("click",function(e){
		//alert("Web");
		var clientmsg=$("#usermsg").val();
		$.post("postmsg.php", {text:clientmsg,room:'<?php echo $roomname ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},function(data,status){document.getElementsByClassName('anyClass')[0].innerHTML=data;});
		
		$("#usermsg").val("");
		return false;
	});
	
	
});
</script>

</body>
</html>
