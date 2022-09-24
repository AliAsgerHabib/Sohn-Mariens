<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

<table id="example" class="table table-striped" >
<thead><tr>
	<th>Admit ID</th>
	<th>Ward No</th>
	<th>Bed No</th>
	<th>Patient Name</th>
	<th>Department</th>
	<th>Doctor Name</th>
	<th>Action</th>
	
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$ward=$_REQUEST["ward"];
	if ($ward=="All") 
	$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name from admit inner join departments on departments.dept_id=admit.department where isadmit='1' order by ward,bno");
	else
		$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name from admit inner join departments on departments.dept_id=admit.department where ward='$ward' and isadmit='1' order by ward,bno") ;
	if ($r) {
		while ($row=mysqli_fetch_array($r)) {
			echo "<tr>";
			for ($i=0;$i<6;$i++) {
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";
			}
			echo "<td style='text-align:center;'><a href='discharge_button.php?a=$row[0]' class=' btn btn-primary';>Discharge</td>";
		}
	} else {
		echo mysqli_error($con);
	}
	
?>
</tbody></table>

