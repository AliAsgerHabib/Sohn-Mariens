<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Time Table</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/doctor_schedule_management.css">
  <script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				var values=this.value;
				$.post("duties_table.php",{dept:values},function(data)
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
         "order": [[ 0, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [2,3,4,5,6,7,8,9,10], // column index (start from 0)
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
							<img src="../images/tt.jpg" style="width: 80px;"> Doctors' Schedules
						</div>	
					</div>

					<div class="row form-inline" >
					<div class="col-6 col-sm-4 col-md-4 col-lg-3">
						<span class="label1">Department Name:</span>
					</div>	
					<div class="col-6 col-sm-2">
						<select id='dept' name="dept" class="form-control" style="margin-left: 0px;">
							<option value="All">All</option>
							<?php
								$r=mysqli_query($con,"select dept_id,Name from departments where isDoctor='1'");
								while($row=mysqli_fetch_array($r))
								{
									echo "<option value='$row[0]'>$row[1]</option>";
								}
							?>
						</select>
					</div>	
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div id="area">
							<table class="table table-striped" id="example" style="width:100%">
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
								</tr></thead>

								<tbody>
									<?php
											$r=mysqli_query($con,"select duties.eid, employee.Name,departments.Name,duties.Mon,duties.Tues,duties.Wed,duties.Thurs,duties.Fri,duties.Sat,duties.Sun from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id)");
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
										</tbody>
									</table>
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