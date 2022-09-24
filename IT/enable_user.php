<!DOCTYPE html>
<html>
<head>
	<title>Enable/Disable User</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/admit_details.css">
  <script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				var values=this.value;
				$.post("enable_user_table.php",{dept:values},function(data)
				{
					$("#area").html(data).show();
				});
			});
		});
	</script>
	<style type="text/css">
		@media (max-width: 576px) {
    .container{
        max-width: 90vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 190%!important;
      }
    }

      
    @media (min-width: 576px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 150%!important;
      }
    }

    @media (min-width: 768px) {
    .container{
        max-width: 90vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 120%!important;
      }
    }

    @media (min-width: 992px) {
    .container{
        max-width: 95vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 100%!important;
      }
    }

    @media (min-width: 1200px) {
    .container{
        max-width: 1050px;
      }
      #area
      {
        overflow-x: hidden!important;
      }
      #area table
      {
        width: 100%!important;
      }

    }
	</style>
<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [3,4], // column index (start from 0)
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
				
				<div class="row">
					<div class="heading col-sm-12">
						<img src="../images/access.png" style="width: 88px;height: auto;"> User Access Manager
					</div>	
				</div>

				<div class="row form-inline" >
					<div class="col-6 col-sm-4 col-md-4 col-lg-3">
						<span class="label1">Department Name:</span>
					</div>	
					<div class="col-6 col-sm-3">
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
							<table class="table table-striped" id="example" style=";width:100%;">
								<thead><tr>
									<th>EID</th>
									<th>Employee Name</th>
									<th>Username</th>
									<th>Department</th>
									<th>Action</th>
								</tr></thead>

								<tbody>
									<?php
											$r=mysqli_query($con,"select login_users.eid,employee.name, login_users.username,departments.name,isActive from employee inner join login_users on employee.id=eid inner join departments using(dept_id)");
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
													if($row[4]) echo "<td style='text-align:center;font-size:17px;'><a href='disable.php?a=$row[0]' class='btn btn-secondary'>Disable</a></td>";
													else echo "<td  style='text-align:center;font-size:17px;'><a href='enable.php?a=$row[0]' class='btn btn-primary'>Enable</a></td>";
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