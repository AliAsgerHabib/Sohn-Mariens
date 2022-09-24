<style type="text/css">
</style>

<?php
	include ('../database_connect.php');
	$dept=$_REQUEST["dept"];
	$r1=mysqli_query($con,"select name from employee where dept_id='$dept'");
	if($r1)
	{
?>
<select name="doc" id="doc" required class="form-control w3-hover-light-gray">
	<option value="">Select Doctor</option>
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