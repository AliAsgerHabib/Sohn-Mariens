<?php

	$id=$_REQUEST["a"];
	include("../database_connect.php");
	$r1=mysqli_query($con,"select isDoctor from employee inner join departments using(dept_id) where ID='$id'");
	
	$d1=mysqli_query($con,"delete from duties where eid='$id'");
	$d2=mysqli_query($con,"delete from employee where ID='$id'");
	if($d2)
	{
		header('location:employee_details.php');
	}
	else echo mysqli_error($con);
?>