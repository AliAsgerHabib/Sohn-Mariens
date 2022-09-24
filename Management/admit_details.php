<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		  $('#example').DataTable(
		  {
			"order": [[ 0, "desc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6,7,8], // column index (start from 0)
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
				$.post("admit_table.php",{dept:values},function(data)
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
							<img src="../images/admit1.png" style="width: 88px;height: auto;"> Patient Admit Database
						</div>	
					</div>

					<div class="row form-inline" >
						
						<div class="col-6 col-sm-6 col-md-5 col-lg-3">
							<span class="label1">Department Name:</span>
						</div>	
					
						<div class="col-6 col-sm-2">
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
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div id="area">
								<table id="example" class="table table-striped" >
									<thead><tr>
										<th>ID </th>
										<th>Patient Name</th>
										<th>Department</th>
										<th>Doctor Name</th>
										<th>Ward No</th>
										<th>Bed No</th>
										<th>Contact No</th>
										<th>Status</th>
										<th>Details</th>

									</tr></thead>

									<tbody>
									<?php
										$r=mysqli_query($con, "select pid,pname,name,doc_name,ward,bno,phno,isadmit from admit inner join departments on departments.dept_id=admit.department order by ward,bno");
										if ($r) {
											while ($row=mysqli_fetch_array($r)) {
												echo "<tr>";
												for ($i=0;$i<7;$i++) {
													echo "<td>";
													echo "$row[$i]";
													echo "</td>";
												}
												if($row[7]) echo "<td style='color:green;'>Admitted</td>";
												else echo "<td style='color:blue;'>Discharged</td>";

												echo "<td><a href='admit_cdetails.php?a=$row[0]' class='btn btn-primary'>Show Details</td>";
												echo "</tr>";

											}
										} else {
											echo mysqli_error($con);
										}
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