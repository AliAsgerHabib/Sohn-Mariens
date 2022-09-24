<?php
include 'database_connect.php';
session_start();
$eid=$_SESSION["eid"];
date_default_timezone_set("Asia/Kolkata");
$date=date("Y-m-d");
$time=date("H:i");
$r1=mysqli_query($con,"update login_users set isOnline=0,At_date='$date',At_time='$time' where eid='$eid'");
if(session_destroy())
{
	header("location:index.php");
}	
?>