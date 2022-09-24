<?php
	include '../database_connect.php';
	$dept=$_POST["dept"];
	$emp=$_POST["enames"];	
	$pass=$_POST["pass"];
	$uname=$_POST["user"];

	$r=mysqli_query($con,"select name,isDoctor from departments where dept_id=$dept");
	if($row=mysqli_fetch_array($r))
	{
		if($row[1])
		{
			$dep="Doctor";
		}
		else if($row[0]=="Reception Staff")
			$dep="Reception";
		else if($row[0]=="IT Support")
			$dep="IT";
		else if($row[0]=="Management")
			$dep="Management";
	}

	$r=mysqli_query($con,"insert into login_users (username,eid,password,department,isActive) values ('$uname','$emp','$pass','$dep',1)");
		if($r)
		{
			$r1=mysqli_query($con,"update employee set hasaccount=1 where id='$emp'");
			if(!$r1)
				echo mysqli_error($con);
			else
				header("location:dashboard.php");
		}
		
?>