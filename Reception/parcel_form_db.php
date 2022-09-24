<?php
	include("../database_connect.php");
	$sname=mysqli_real_escape_string($con,$_POST["sname"]);
	$s_address=mysqli_real_escape_string($con,$_POST["s_address"]);
	$adate=mysqli_real_escape_string($con,$_POST["adate"]);
	$atime=mysqli_real_escape_string($con,$_POST["atime"]);
	$sf=mysqli_real_escape_string($con,$_POST["sf"]);
	$r=mysqli_query($con,"insert into parcel (SName,SAddress,ADate,ATime,SentTo) values('$sname','$s_address','$adate','$atime','$sf')");
	if($r)
		header("location:parcel_details.php");
	else
		echo "mysqli_error($con)";
?>