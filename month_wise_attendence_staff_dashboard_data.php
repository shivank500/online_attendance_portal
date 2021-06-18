<?php
session_start();
if(!isset($_POST['stamon']))
	header("location:login.php");


include("dbconnection.php");



$email = $_SESSION['email'];
$month = $_POST['month'];
$_SESSION['sem']=  $_POST['sem'];
$_SESSION['branch']=  $_POST['branch'];
$_SESSION['sec']=  $_POST['sec'];
$_SESSION['sub']=  $_POST['sub'];

//echo $month;

//SELECT * FROM take_attendance WHERE MONTH(Date)<12;

if($month==1){$month2="January";}
if($month==2){$month2="February";}
if($month==3){$month2="March";}
if($month==4){$month2="April";}
if($month==5){$month2="May";}
if($month==6){$month2="June";}
if($month==7){$month2="July";}
if($month==8){$month2="August";}
if($month==9){$month2="September";}
if($month==10){$month2="October";}
if($month==11){$month2="November";}
if($month==12){$month2="December";}


$_SESSION['month']=  $month;
$_SESSION['email']=  $email;	 
$_SESSION['month2']=  $month2;	 
header("location:month_wise_attendence_staff_dashboard.php");	

?>