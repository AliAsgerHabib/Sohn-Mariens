<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/delete_user.css">
  
  <style type="text/css">
	
	.delete
	{
		margin-top: 20px;
		text-align: center;
		vertical-align: middle;
	}
</style>

<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable(
      {
         "order": [[ 1, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [0,4,5], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
      });
  });
</script>

<script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				var values=this.value;
				$.post("user_table.php",{dept:values},function(data)
				{
					$("#area").html(data).show();
				});
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
							<img src="../images/x.png" style="width: 85px;"> &nbsp;Delete User
						</div>	
					</div>

					<div class="row form-inline" >
					<div class="col-6 col-sm-4 col-md-4 col-lg-3">
						<span class="label1">Department Name:</span>
					</div>	
					<div class="col-6 col-sm-2">
						<select id='dept' name="dept" class="form-control">
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
							<form action="delete_all.php" method="post">
								<table class="table table-striped" id="example" style="width:100%;">
									<thead><tr>
										<th><i class='fas fa-check-square' style='font-size: 24px;'></i></th>
										<th>EID</th>
										<th>Full Name</th>
										<th>User ID</th>
										<th>Department</th>
										<th>Actions</th>
									</tr></thead>
									<tbody>
									<?php
											$r=mysqli_query($con,"select employee.ID, employee.name, username,departments.name from employee inner join login_users on employee.id=login_users.eid inner join departments USING(dept_id)");
										if($r)
										{
											while($row=mysqli_fetch_array($r))
											{
												echo "<tr>";
												echo "<td style='text-align:center;'><input type='checkbox' style='width:16px!important;height:auto!important;margin-left:0px!important;' name='chk[]' value=$row[0]></td>";
												for($i=0;$i<4;$i++)
												{
													echo "<td>";
													echo "$row[$i]";
													echo "</td>";	
												}
												echo "<td style='text-align:center'><a href='delete.php?a=$row[0]' title='Delete ID'  class='del btn btn-primary'><i  class='fas fa-trash-alt' style='font-size: 20px;'></i> Delete</td>";
												echo "</tr>";
											}
										}
										else echo mysqli_error($con);
										
									?>
									</tbody>
								</table>

								<div class="delete">
									<input type="submit" value="Delete Selection" name="del" class="del btn btn-secondary" style="border:red!important;">
								</div>

							</form>
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