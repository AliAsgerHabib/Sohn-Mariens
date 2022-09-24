<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "desc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6,7,8], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

<table id="example" class="table table-striped" >
<thead><tr>
	<th>ID </th>
	<th>Patient Name</th>
	<th>Department</th>
	<th>Doctor Name</th>
	<th>Ward No</th>
	<th>Bed No</th>
	<th>Contact No</th>
	<th>Status</th>
	<th>Details</th>
	
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$dept=$_REQUEST["dept"];
	if ($dept=="All") 
	$r=mysqli_query($con, "select pid,pname,name,doc_name,ward,bno,phno,isadmit from admit inner join departments on departments.dept_id=admit.department order by ward,bno");
	else
		$r=mysqli_query($con, "select pid,pname,name,doc_name,ward,bno,phno,isadmit from admit inner join departments on departments.dept_id=admit.department where department=$dept order by ward,bno") ;
	if ($r) {
		while ($row=mysqli_fetch_array($r)) {
			echo "<tr>";
			for ($i=0;$i<7;$i++) {
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";
			}
				if($row[7]) echo "<td style='color:green;'>Admitted</td>";
				else echo "<td style='color:blue;'>Discharged</td>";
				echo "<td><a href='admit_cdetails.php?a=$row[0]' class='btn btn-primary'>Show Details</td>";
			echo "</tr>";
		}
	} else {
		echo mysqli_error($con);
	}
	
?>
</tbody></table>

