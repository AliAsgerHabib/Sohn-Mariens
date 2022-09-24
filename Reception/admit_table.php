<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6,7], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

<table id="example" class="table table-striped" >
<thead><tr>
	<th>ID </th>
	<th>Ward No</th>
	<th>Bed No</th>
	<th>Patient Name</th>
	<th>Department</th>
	<th>Doctor Name</th>
	<th>Companion</th>
	<th>Contact No</th>
	
</tr></thead><tbody>
<?php
	include("../database_connect.php");
	$ward=$_REQUEST["ward"];
	if ($ward=="All") 
	$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name,cname,phno from admit inner join departments on departments.dept_id=admit.department where isadmit='1' order by ward,bno");
	else
		$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name,cname,phno from admit inner join departments on departments.dept_id=admit.department where ward='$ward' and isadmit='1' order by ward,bno") ;
	if ($r) {
		while ($row=mysqli_fetch_array($r)) {
			echo "<tr>";
			for ($i=0;$i<8;$i++) {
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";
			}
			echo "</tr>";
			
		}
	} else {
		echo mysqli_error($con);
	}
	
?>
</tbody></table>

