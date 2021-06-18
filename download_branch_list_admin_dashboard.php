<?php
session_start();

include("dbconnection.php");

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=attendance.xls');

$s= "select * from staff ORDER by Name";
     $rs=  $con->query($s); 

$s1= "select * from hod ORDER by Name";
     $rs1=  $con->query($s1); 


?>

<center>
<h1><u>Welcome To ABES Engineering College</u></h1>
<table class="table" border="2" style="font-size: 20px; text-align: center; background-color:cornsilk;">
<tr style="margin-left:200px;"><td>.</td><td></td><td></td></tr>
<tr style="background-color: violet; text-align: center; margin-left:100px;"><td colspan="3" style="font-weight: bolder; color: white; font-size: 20px;"><i><u>List of Branch's</u></i></td></tr>
<tr><td><b>S.No.</b></td><td><b>Branch</b></td><td><b>No.of Seats</b></td></tr>
<tr style="text-align: center; margin-left:100px;"><td>1</td><td>Computer Science & Engineering</td><td>180</td></tr>
<tr style="text-align: center; margin-left:100px;"><td>2</td><td>Information Technology</td><td>180</td></tr>
<tr style="text-align: center; margin-left:100px;"><td>3</td><td>Electronics and Communication Engineering</td><td>180</td></tr>
<tr style="text-align: center; margin-left:100px;"><td>4</td><td>Mechanical Engineering</td><td>180</td></tr>
<tr style="text-align: center; margin-left:100px;"><td>5</td><td>Civil Engineering</td><td>180</td></tr>
<tr style="text-align: center; margin-left:100px;"><td>6</td><td>Computer Science & Information Technology Engineering</td><td>180</td></tr>
</table>
<h2 style="color:red;">Thanks for Downloading a List......</h2>
</center>