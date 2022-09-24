<?php
		include '../database_connect.php';
		if(isset($_REQUEST["del"]))
		{
			if(!isset($_POST["chk"]))
				header('location:employee_details.php');
			$arr=$_POST["chk"];
			for($i=0;$i<count($arr);$i++)
			{
				$r=mysqli_query($con,"delete from employee where ID='$arr[$i]'");
				$r=mysqli_query($con,"delete from duties where eid='$arr[$i]'");
				if($r) 
					header('location:employee_details.php');
				else echo mysqli_error($con);
			}
		}
		else header('location:employee_details.php');
	?>