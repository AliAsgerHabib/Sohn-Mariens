<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6,7,8,9,10], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

<table id="example" class="table table-striped" style="width:100%;">
<thead><tr>
	<th>EID&nbsp;</th>
	<th>Employee Name</th>
	<th>Department</th>
	<th>Position</th>
	<th>Mon</th>
	<th>Tue</th>
	<th>Wed</th>
	<th>Thurs</th>
	<th>Fri</th>
	<th>Sat</th>
	<th>Sun</th>
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if($dept=="All")
		$r=mysqli_query($con,"select duties.eid, employee.Name,departments.Name,position,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id)");
	else 
		$r=mysqli_query($con,"select duties.eid, employee.Name,departments.Name,position,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id) where dept_id='$dept'");
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			for($i=0;$i<=10;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
		}
	}
	else echo mysqli_error($con);
	
?>
</tbody></table>