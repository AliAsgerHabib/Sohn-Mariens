<?php
	$id=$_REQUEST["a"];
	include '../database_connect.php';
	$r=mysqli_query($con,"update patients set status='Ongoing' where id='$id'");
	if($r)
		header('location:appointment_details.php');
	else echo mysqli_error($con);
?>