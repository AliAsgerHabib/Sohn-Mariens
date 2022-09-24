<!DOCTYPE html>
<html>
<head>
	<title>Home - Management</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/dashboard_IT.css">
  <script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				var values=this.value;
				$.post("login_employee.php",{dept:values},function(data)
				{
					$("#area").html(data).show();
				});
			});
		});
	</script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example1').DataTable(
      {
         "order": [[ 0, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [3,4,5], // column index (start from 0)
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
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 table-body">

					<div class="row form-inline">
						<div class="col-6 col-sm-4 col-md-4 col-lg-3">
							<span class="label1">Department Name:</span>
						</div>	
						<div class="col-5 col-sm-2">
							<select id='dept' name="dept" class="form-control w3-hover-light-gray">
								<option value="All">All</option>
								<?php
									$r=mysqli_query($con,"select dept_id,Name from departments where isloginAllowed=1");
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
								<table class="table table-striped" id="example1" style="width:100%;">
									<thead><tr>
										<th>EID</th>
										<th>Employee Name</th>
										<th>Username</th>
										<th>Department</th>
										<th>Status</th>
										<th>Latest Activity</th>
									</tr></thead>
									<tbody>
									<?php
											$r=mysqli_query($con,"select login_users.eid,employee.name, login_users.username,departments.name,isOnline,At_date,At_time from employee inner join login_users on employee.id=eid inner join departments using(dept_id)");
										if($r)
										{
											while($row=mysqli_fetch_array($r))
											{
												echo "<tr>";
												for($i=0;$i<4;$i++)
												{
													echo "<td>";
													echo "$row[$i]";
													echo "</td>";	
												}
												if($row[4]) echo "<td style='text-align:center;font-size:17px;color:green;'>Online</td>";
												else echo "<td  style='text-align:center;font-size:17px;color:red;'>Offline</td>";
												if($row[4])
													echo "<td style='text-align:center;color:green;'>Came online at ",$row[5],"   ",$row[6],"</td>";
												else echo "<td  style='text-align:center;color:red;'>Got offline at ",$row[5],"   ",$row[6],"</td>";
											}
										}
										else echo mysqli_error($con);		
									?>
									</tbody></table>
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