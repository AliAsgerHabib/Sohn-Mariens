<!DOCTYPE html>
<html>
<head>
	<title>My Admitted Cases</title>
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
			'targets': [2,3,6,7], // column index (start from 0)
			'orderable': false, // set orderable false for selected columns
			}]
		   });
		});
	</script>

	<style type="text/css">
		@media (max-width: 576px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 250%!important;
      }
    }

      
    @media (min-width: 576px) {
    .container{
        max-width: 94vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
      #area table
      {
        width: 200%!important;
      }
    }

    @media (min-width: 768px) {
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
        width: 120%!important;
      }
    }

    @media (min-width: 1200px) {
    .container{
        max-width: 1100px;
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
							<img src="../images/admit1.png" style="width: 88px;height: auto;"> My Admitted Patients
						</div>	
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div id="area">
								<table id="example" class="table table-striped" >
									<thead><tr>
										<th>ID </th>
										<th>Patient Name</th>
										<th>Companion</th>
										<th>Contact No</th>
										<th>Ward No</th>
										<th>Bed No</th>
										<th>Status</th>
										<th>Actions</th>
									</tr></thead>
									<tbody>
										<?php
											$r=mysqli_query($con, "select pid,pname,cname,phno,ward,bno,isadmit from admit inner join departments on departments.dept_id=admit.department where doc_name='$dname' order by ward,bno");
											if ($r) {
												while ($row=mysqli_fetch_array($r)) {
													echo "<tr>";
													for ($i=0;$i<6;$i++) {
														echo "<td>";
														echo "$row[$i]";
														echo "</td>";
													}
													if($row[6]) echo "<td style='color:green;'>Admitted</td>";
													else echo "<td style='color:blue;'>Discharged</td>";

													echo "<td style='text-align:center'><a href='admit_cdetails.php?a=$row[0]' class='btn btn-primary'>Show Details</td>";
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