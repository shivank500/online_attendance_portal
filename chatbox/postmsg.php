<?php

include 'db.php'; 

$msg=$_POST['text'];
$room=$_POST['room'];
$ip=$_POST['ip'];

/*echo "kkkkk";
echo $msg;
echo $room;
echo $ip;
*/
$sql="INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`) VALUES ('$msg','$room','$ip',CURRENT_TIMESTAMP)";
mysqli_query($con,$sql);
mysqli_close($con);

?>