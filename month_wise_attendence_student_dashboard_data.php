<?php
session_start();
if(!isset($_POST['mon']))
	header("location:login.php");


include("dbconnection.php");


$email = $_SESSION['email'];
$month = $_POST['month'];


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

header("location:month_wise_attendence_student_dashboard.php");	

?>