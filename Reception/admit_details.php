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
			"order": [[ 0, "asc" ]],
			"bLengthChange": false,
			'columnDefs': [ {
			'targets': [4,5,6,7], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

	<script>
		$(document).ready(function()
		{
			$("#wno").change(function()
			{
				var values=this.value;
				$.post("admit_table.php",{ward:values},function(data)
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
						<div class="col-4 col-sm-3 col-md-2 col-lg-2">
							<span class="label1">Ward No:</span>
						</div>	
						<div class="col-6 col-sm-3">
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
						<div class="col-sm-12">
							<div id="area">
								<table id="example" class="table table-striped" >
									<thead><tr>
										<th>ID </th>
										<th>Ward No</th>
										<th>Bed No</th>
										<th>Patient Name</th>
										<th>Department</th>
										<th>Doctor Name</th>
										<th>Companion</th>
										<th>Contact No</th>
									</tr></thead>

									<tbody>
									<?php
										$r=mysqli_query($con, "select pid,ward,bno,pname,name,doc_name,cname,phno from admit inner join departments on departments.dept_id=admit.department where isadmit='1' order by ward,bno");
										if ($r) {
											while ($row=mysqli_fetch_array($r)) {
												echo "<tr>";
												for ($i=0;$i<8;$i++) {
													echo "<td>";
													echo "$row[$i]";
													echo "</td>";
												}
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