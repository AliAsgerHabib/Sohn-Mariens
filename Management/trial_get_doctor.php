<script>
		$(document).ready(function()
		{
			$("#doc").change(function()
			{
				var values=this.value;
				var x=$("#dept").val();
				$.post("trial_appointment_table.php",{doctor:values,dept:x},function(data)
				{
					$("#area").html(data).show();
				});
			});
		});
	</script>

	<?php
	include ('../database_connect.php');
	$dept=$_REQUEST["dept"];
	if($dept=='All') $r1=mysqli_query($con,"select employee.name from employee inner join departments using(dept_id) where isdoctor=1");
	else $r1=mysqli_query($con,"select name from employee where dept_id='$dept'");
	if($r1)
	{
?>
<select name="doc" id="doc" class="form-control w3-hover-light-gray">
	<option value="All" selected>All</option>
	<?php
		while($row=mysqli_fetch_array($r1))	
		{	
			echo "<option value='$row[0]'>$row[0]</option>";
		}
	?>
</select>
<?php
}
else echo mysqli_error($con);
?>