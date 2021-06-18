<?php
$room=$_POST['room'];

include 'db.php'; 

$sql="SELECT * FROM rooms where roomname='$room'";
$result=mysqli_query($con,$sql);
if($result)
{
	if(mysqli_num_rows($result)>0)
	{
		$msg="Please Select Another Room , this room is already used";
		echo '<script language="javascript">';
		echo 'alert("'.$msg.'");';  //not showing an alert box.;
		echo 'window.location="http://localhost/chatbox";';
		echo '</script>';
	}
	else
	{
		$sql="INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', CURRENT_TIMESTAMP);";
		if(mysqli_query($con,$sql))
		{
			$msg="Your Room is ready for Chat";
		    echo '<script language="javascript">';
		    echo 'alert("'.$msg.'");';  //not showing an alert box.;
		    echo 'window.location="http://localhost/chatbox/rooms.php?roomname='.$room.'";';
		    echo '</script>';
		}
	}
}
else
{
	echo "Error:".mysqli_error($con);
}	

?>