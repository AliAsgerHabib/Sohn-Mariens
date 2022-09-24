<?php
	include ('../database_connect.php');
	$dept=$_POST["dept"];
	if($dept=='All')
	{
		$r=mysqli_query($con,"select id,app_date,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id where (status='active' or status='Ongoing') order by app_date desc,app_time desc");
	}
	else
	{
		$r=mysqli_query($con,"select id,app_date,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id where department='$dept' and (status='active' or status='Ongoing') order by app_date desc,app_time desc");
		
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
				echo "<td style='text-align:center;'><a id='ongoing'><i title='Ongoing' class='fas fa-play' style='font-size: 20px;'></i></a>";
			else 
			{	echo "<td><a href='start_appointment.php?a=$row[0]' id='start'><i title='Start Appointment' class='fas fa-play' style='font-size: 20px;'></i></a>";
				echo "<a href='cancel_appointment.php?a=$row[0]' id='del'><i title='Cancel Appointment' class='fas fa-trash-alt' style='font-size: 20px;'></i></td>";
			}
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