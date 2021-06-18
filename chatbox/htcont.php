<?php

include 'db.php';
$room=$_POST['room'];

//echo "ll";
$sql="SELECT msg , stime , ip FROM msgs WHERE room='$room'";
$res="";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$res=$res.'<div class="container" style="background-color:pink; font-size:20px; font-weight:bolder;">';
		$res=$res.$row['ip'];
		$res=$res."says <p>".$row['msg'];
		$res=$res.'</p> <span class="time-right"  style="color:blue;">'.$row["stime"].'</span></div>';
	}
}
echo $res;


?>