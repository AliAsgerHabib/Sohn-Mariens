<?php
	$id=$_REQUEST["a"];
	include '../database_connect.php';
	$r=mysqli_query($con,"delete from patients where id='$id'");
	if($r)
		header('location:appointment_details.php');
	else echo mysqli_error($con);
?>