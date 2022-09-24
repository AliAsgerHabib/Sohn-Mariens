<style type="text/css">
	.error_app
	{
    color:red;
    padding-bottom:10px;
    text-align: center;
    font-size: 15px;
  }
  
  #doc
  {
  	width:245px!important;
  }

</style>

<script type="text/javascript">
	$("#doc").change(function()
      {
        var doctor=$("#doc").val();
        var x=$("#ap_date").val();
        var y=$("#ap_time").val();
        $.post("check_appointment.php",{doc:doctor,date:x},function(data)
        {
          $("#time").html(data).show();
        });
      });
</script>
<?php
	if(!isset($_REQUEST["day"]))
		echo "<span class='error_app'>* Please set an appointment date first *</span>";
	else
	{
		include ('../database_connect.php');
		$dept=$_REQUEST["dept"];
		$day=$_REQUEST["day"];
		$r1=mysqli_query($con,"select name from employee inner join duties on employee.ID=duties.eid where dept_id='$dept' and duties.$day='OPD'");
		if($r1)
		{
?>
		<select name="doc" id="doc" required class="form-control w3-hover-light-gray">
			<?php
				echo "<option value=''>Select Doctor</option>";
				while($row=mysqli_fetch_array($r1))	
				{	
					
					echo "<option value='$row[0]'>$row[0]</option>";
				}
			?>
		</select>
		<?php
		}
		else
			echo mysqli_error($con);
	}
?>