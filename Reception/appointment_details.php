<!DOCTYPE html>
<html>
<head>
	<title>Appointment Database</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/appointment_details.css">

  <script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				$("#doc").val("All");
				var values=this.value;
				$.post("trial_change_department.php",{dept:values},function(data)
				{
					$("#area").html(data).show();
				});
				$.post("trial_get_doctor.php",{dept:values},function(data)
				{
					$("#docname").html(data).show();
				});
			});
		});
	</script>

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

</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-12 table-body">

					<div class="row">
						<div class="heading col-sm-12">
							<img src="../images/app1.png" style="width: 90px;height: auto;"> Appointment Database
						</div>	
					</div>

					<div class="row form-inline" >
						
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<span class="label1">Department Name:</span>
						</div>	
					
						<div class="col-6 col-sm-2 col-md-2 ">
							<select id='dept' name="dept" class="form-control w3-hover-light-gray">
								<option selected value="All">All</option>
								<?php
			             $r=mysqli_query($con, "select dept_id,Name from departments where isdoctor=1");
			             while ($row=mysqli_fetch_array($r)) {
			             	echo "<option value='$row[0]'>$row[1]</option>";
				         		}
	             	?>
							</select>
						</div>	
					
						<div class="col-12 col-sm-4 col-md-12 col-lg-2"></div>
					
						<div class="col-6 col-sm-6 col-md-4 col-lg-2">
							<span class="label1">Doctor Name:</span>
						</div>	

						<div class="col-6 col-sm-2 col-md-2 col-lg-2">
							<div id="docname">
								<?php
									$r1=mysqli_query($con,"select employee.name from employee inner join departments using(dept_id) where isdoctor=1");
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
							</div>
						</div>	
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div id="area">
							<?php
								$r=mysqli_query($con,"select id,app_date,app_time,patients.name,phno,doc_name,departments.name,status from patients inner join departments on department=dept_id where (status='active' or status='Ongoing')");
								if($r)
								{
							?>
						
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

						</div>
					</div>	
				</div>	

				</div>
			</div>
		</div>
	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>