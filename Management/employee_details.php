<!DOCTYPE html>
<html>
<head>
	<title>Employee Database</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/employee_details.css">

  <style type="text/css">
		#intab
		{
			border:none!important;
			background-color: white!important;
			margin: auto;
		}
		 #intab td, #intab tr
		 {
		 	border:none!important;
		 	padding: none;
		 }
		 .delete
		{
			margin-top: 20px;
			text-align: center;
			vertical-align: middle;
		}
	</style>

  <script>
		$(document).ready(function()
		{
			$("#dept").change(function()
			{
				var values=this.value;
				$.post("employee_table.php",{dept:values},function(data)
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
        "order": [[ 1, "asc" ]],
        "bLengthChange": false,
        'columnDefs': [ {
        'targets': [0,3,4,5,6,7], // column index (start from 0)
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
							<img src="../images/job1.jpg" style="width: 90px;"> Employee Database
						</div>	
					</div>

					<div class="row form-inline" >
						<div class="col-6 col-sm-5 col-md-4 col-lg-3">
							<span class="label1">Department Name:</span>
						</div>	
						<div class="col-6 col-sm-6 col-md-4 col-lg-3">
							<select id='dept' name="dept" class="form-control">
								<option value="All">All</option>
								<?php
									$r=mysqli_query($con,"select dept_id,Name from departments");
									while($row=mysqli_fetch_array($r))
									{
										echo "<option value='$row[0]'>$row[1]</option>";
									}
								?>
							</select>
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div id="area">
								<form action="delete_employee_all.php" method="post">
									<table class="table table-striped" id="example" style="width:100%!important;">
											<thead><tr>
												<th><i class='fas fa-check-square' style='font-size: 24px;'></i></th>
												<th>EID</th>
												<th>Employee Name</th>
												<th>Department</th>
												<th>Position</th>
												<th>Mobile No</th>
												<th>Email</th>
												<th>Actions</th>
											</tr></thead>

											<tbody>
												<?php
														$r=mysqli_query($con,"select ID, employee.name, departments.name,position,mob,email from employee inner join departments USING(dept_id)");
															if($r)
															{
																while($row=mysqli_fetch_array($r))
																{
																	echo "<tr>";
																	echo "<td><input type='checkbox' style='width:16px!important;height:auto!important;margin-left:5px!important;' name='chk[]' value=$row[0]></td>";
																	echo "<td>$row[0]</td>";
																	echo "<td style='text-align:left'>$row[1]</td>";
																	for($i=2;$i<6;$i++)
																	{
																		echo "<td>";
																		echo "$row[$i]";
																		echo "</td>";	
																	}
																	echo "<td>
																		<table id='intab'>
																			<tr>
																				<td><a href='emp_file.php?a=$row[0]' class=''><i title='Show Complete' class='fas fa-file' style='font-size: 24px;'></i></td>
																				<td><a href='change_emp.php?a=$row[0]'><i title='Update Record' class='fas fa-edit' style='font-size: 20px;'></i></td>
																				<td><a href='delete_employee.php?a=$row[0]' class='' id='del'><i title='Delete Record' class='fas fa-trash-alt' style='font-size: 20px;'></i></td>
																			</tr>
																		</table></td>";
																		echo "</tr>";
																}
															}
															else echo mysqli_error($con);
														?>
													</tbody></table>
													<div class="delete">
														<input type="submit" value="Delete Selection" name="del" class="btn btn-secondary" style="background-color: red;border:red!important;">
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