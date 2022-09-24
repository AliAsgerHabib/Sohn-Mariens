<?php
	include '../database_connect.php';
	$id=$_REQUEST["a"];
	echo $id;
	$r=mysqli_query($con,"update login_users set isActive=1 where eid='$id'");
	if($r)
		header("location:enable_user.php");
?>