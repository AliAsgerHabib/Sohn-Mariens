<?php
	include("database_connect.php");
	session_start();
	$uname=mysqli_real_escape_string($con,$_POST["uname"]);
	$pass=mysqli_real_escape_string($con,$_POST["pass"]);
	$r=mysqli_query($con,"select eid,department from login_users where username='$uname' and password='$pass' and isActive=1");
	if($row=mysqli_fetch_array($r))
	{
		date_default_timezone_set("Asia/Kolkata");
		$date=date("Y-m-d");
		$time=date("H:i");
		$r1=mysqli_query($con,"update login_users set isOnline=1,At_date='$date',At_time='$time' where eid=$row[0]");
		$_SESSION["eid"]=$row[0];
		$_SESSION["dept"]=$row[1];
		if($row[1]=="Doctor") header("location:doctor/dashboard.php");
		/*else if($row[1]=="pharmacist") header("location:dash.php");
		else if($row[1]=="labs") header("location:dash.php");*/
		else if($row[1]=="Reception") header("location:reception/dashboard.php");
		else if($row[1]=="Management") header("location:management/dashboard.php");
		else if($row[1]=="IT") header("location:it/dashboard.php");
		else echo "Not found";
		echo mysqli_error($con);
	}
	else
	{
		$_SESSION["err"]="Invalid username or password";
		header("location:index.php");
	}
?>