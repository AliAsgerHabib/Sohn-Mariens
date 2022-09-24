<?php
	include ('../database_connect.php');
	$dept=$_POST["dept"];
	if($dept=='All')
	{
		$r=mysqli_query($con,"select id,app_date,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id order by app_date desc,app_time desc");
	}
	else
	{
		$r=mysqli_query($con,"select id,app_date,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id where department='$dept' order by app_date desc,app_time desc");
		
	}
	if($r)
	{
?>
<script type="text/javascript">
		$(document).ready(function() {
    	$('#example').DataTable(
    	{
    		"order": [[ 1, "asc" ],[2,"asc"]],
    		"bLengthChange": false,
    		'columnDefs': [ {
        'targets': [4,5,6,7], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
    	});
	});
	</script>
<table id="example" class="table table-striped" style="width:100%;">
<thead><tr>
	<th>ID</th>
	<th>Date</th>
	<th>Time</th>
	<th>Patient Name</th>
	<th>Contact No</th>
	<th>Doctor Name</th>
	<th>Department</th>
	<th>Action</th>
</tr></thead>
<tbody><?php
	if($r)
	{
		while($row=mysqli_fetch_array($r))
		{
			echo "<tr>";
			for($i=0;$i<7;$i++)
			{
				echo "<td>";
				echo "$row[$i]";
				echo "</td>";	
			}
			if($row[7]=='Ongoing') 
				echo "<td style='text-align:center;font-size:18px;color:#ff9900;'>Ongoing</td>";
			else if($row[7]=='Active') 
				echo "<td style='text-align:center;font-size:18px;color:green;'>Active</td>";
			else if($row[7]=='Completed') 
				echo "<td style='text-align:center;font-size:18px;color:gray;'>Completed</td>";
			echo "</tr>";
		}
	}
	else echo mysqli_error($con);
	
?>
</table></tbody>
<?php
	}
	else
		echo mysqli_error($con);
?>