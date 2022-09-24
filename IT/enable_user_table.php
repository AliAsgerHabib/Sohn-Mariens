<script type="text/javascript">
    $(document).ready(function() {
      $('#example1').DataTable(
      {
         "order": [[ 1, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [3,4], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
</script>
<table class="table table-striped" id="example1" style=";width:100%;">
<thead><tr>
	<th>EID</th>
	<th>Employee Name</th>
	<th>Username</th>
	<th>Department</th>
	<th>Action</th>
	
	
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if($dept=="All")
		$r=mysqli_query($con,"select login_users.eid,employee.name, login_users.username,departments.name,isActive from employee inner join login_users on employee.id=eid inner join departments using(dept_id)");
	else 
		$r=mysqli_query($con,"select login_users.eid,employee.name, login_users.username,departments.name,isActive from employee inner join login_users on employee.id=eid inner join departments using(dept_id) where employee.dept_id='$dept'");
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			for($i=0;$i<4;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			if($row[4]) echo "<td style='text-align:center;font-size:17px;'><a href='disable.php?a=$row[0]' class='btn btn-secondary'>Disable</a></td>";
			else echo "<td  style='text-align:center;font-size:17px;'><a href='enable.php?a=$row[0]' class='btn btn-primary'>Enable</a></td>";
		}
	}
	else echo mysqli_error($con);
	
?>
</tbody></table>


