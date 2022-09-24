<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable(
      {
         "order": [[ 0, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [2,3,4,5,6,7,8,9,10], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
  </script>
<table class="table table-striped" id="example" style=";width:100%;">
<thead><tr>
	<th>EID</th>
	<th>Employee Name</th>
	<th>Department</th>
	<th>Mon</th>
	<th>Tue</th>
	<th>Wed</th>
	<th>Thurs</th>
	<th>Fri</th>
	<th>Sat</th>
	<th>Sun</th>
	<th>Change</th>
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if($dept=="All")
		$r=mysqli_query($con,"select duties.eid, employee.Name,departments.Name,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id)");
	else 
		$r=mysqli_query($con,"select duties.eid, employee.Name,departments.Name,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id) where dept_id='$dept'");
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td style='text-align:left'>$row[1]</td>";
			for($i=2;$i<=9;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			echo "<td style='text-align:center;'><a href='change_duties.php?a=$row[0]'><i style='color:#004747;font-size: 25px;' title='Change Duties' class='fas fa-edit'></i></td>";
			echo "</tr>";
		}
	}
	else echo mysqli_error($con);
	
?>
</tbody></table>