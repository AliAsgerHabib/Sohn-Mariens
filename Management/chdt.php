<?php
	include '../database_connect.php';
	$a=$_REQUEST["a"];
	$Mon=$_POST["Mon"];
	$Tues=$_POST["Tues"];
	$Wed=$_POST["Wed"];
	$Thurs=$_POST["Thurs"];
	$Fri=$_POST["Fri"];
	$Sat=$_POST["Sat"];
	$Sun=$_POST["Sun"];
	$r=mysqli_query($con,"update duties set Mon='$Mon',Tues='$Tues',Wed='$Wed',Thurs='$Thurs',Fri='$Fri',Sat='$Sat',Sun='$Sun' where eid='$a'");
	if($r)
		header("location: doctor_schedule.php");
	else 
		echo mysqli_error($con);
?>