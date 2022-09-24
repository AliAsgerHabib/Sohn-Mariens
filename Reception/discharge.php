<!DOCTYPE html>
<html>
<head>
	<title>Patient Discharge</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/discharge.css">

  <script>
		$(document).ready(function()
		{
			$("#wno").change(function()
			{
				var values=this.value;
				$.post("discharge_table.php",{ward:values},function(data)
				{
					$("#area").html(data).show();
				});
			});
		});
	</script>

	<script>
		$(document).ready(function()
		{
		  $('#example').DataTable(
		  {
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6], // column index (start from 0)
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
							<img src="../images/discharge.png" style="width: 110px;height: 110px;">Patient Discharge
						</div>	
					</div>

					<div class="row form-inline" >
					<div class="col-4 col-sm-3 col-md-2 col-lg-2">
						<span class="label1">Ward No:</span>
					</div>	
					<div class="col-5 col-sm-3">
						<select name="wno" id="wno" class="form-control w3-hover-light-gray" required style="height: 100%">
                <option value="All">All</option>
                <option value="Ward 1"> Ward 1</option>
                <option value="Ward 2"> Ward 2</option>
                <option value="Ward 3"> Ward 3</option>
                <option value="Ward 4"> Ward 4</option>
                <option value="Cottage Wards">Cottage Ward</option>
              </select>
					</div>	
				</div>

				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div id="area">
							<table id="example" class="table table-striped" >
								<thead><tr>
									<th>Admit ID&nbsp;</th>
									<th>Ward No</th>
									<th>Bed No</th>
									<th>Patient Name</th>
									<th>Department</th>
									<th>Doctor Name</th>
									<th>Action</th>
								</tr></thead>
							<tbody>
								<?php
									include("../database_connect.php"); 
									$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name from admit inner join departments on departments.dept_id=admit.department where isadmit='1' order by ward,bno");
									if ($r) {
										while ($row=mysqli_fetch_array($r)) {
											echo "<tr>";
											for ($i=0;$i<6;$i++) {
												echo "<td>";
												echo "$row[$i]";
												echo "</td>";
											}
											echo "<td style='text-align:center;'><a href='discharge_button.php?a=$row[0]' class=' btn btn-primary';>Discharge</td>";
										}
									} else {
										echo mysqli_error($con);
									}
									
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