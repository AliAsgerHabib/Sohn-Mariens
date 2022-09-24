<?php
	include("../database_connect.php");
	$name=$_REQUEST["dept_name"];
	$r1= mysqli_query($con, "select id,employee.name, departments.name from employee inner join departments USING(dept_id) where dept_id='$name' and hasaccount='0'");
	echo " <select name='enames' id='names' class='form-control w3-hover-light-gray w3-animate-input' style='width: 97%' required>";	
	echo "<option value=''>Select Employee Name</option>";
	while ($row=mysqli_fetch_array($r1))
	{
    echo "<option value='$row[0]'>$row[1]</option>";
	}
	echo "</select>";
?>