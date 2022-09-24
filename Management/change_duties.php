<!DOCTYPE html>
<html>
<head>
	<title>Change Duties</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
    $p=$_REQUEST["a"];
		
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/change_duties.css">

</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<main>
		<div id="back">
      <a href="doctor_schedule.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Return to Doctor's Schedule</a>
    </div>

    <div class="container">
    	<div class="row">
    		<div class="col-12 col-sm-12 col-md-12 col-lg-12 table-body">
    			
    			<div class="row">
						<div class="heading col-sm-12">
							<img src="../images/tt.jpg" style="width: 80px;height: 80px;"> Change Duties
						</div>
    			</div>

	    			<?php
						$r=mysqli_query($con,"select employee.name,departments.name,photo,duties.* from duties inner join employee on duties.eid=employee.ID inner join departments using(dept_id) where eid=$p");
						echo "<form action='chdt.php?a=$p' method=post>";
						if($rowx=mysqli_fetch_array($r))
						{		
						?>
					<div class="row form-inline">
					<div class="col-8 col-sm-8 col-md-10 col-lg-10">
						
						<div class="row">
							<div class="col-7 col-sm-6 col-md-4 col-lg-3">
								<span class="label1 control-label">Employee ID: </span>		
							</div>
							<div class="col-5 col-sm-6 col-md-1 col-lg-2">
								<?php echo "$p";?>
							</div>

							<div class="col-7 col-sm-6 col-md-4 col-lg-3">
								<span class="label1 control-label">Doctor Name: </span>		
							</div>
							<div class="col-5 col-sm-6 col-md-3 col-lg-4">
								<?php echo $rowx[0];?>
							</div>
						</div>

					

						<div class="row">
							<div class="col-7 col-sm-6 col-md-4 col-lg-3">
								<span class="label1 control-label">Department: </span>	
							</div>
							<div class="col-5 col-sm-6 col-lg-6">
								<?php echo $rowx[1];?>
							</div>
						</div>
					
					</div>
					
					<div class="col-1 col-sm-1 col-md-1 col-lg-2" style="text-align: center;"><?php echo "<img id='pp' src='../upload/$rowx[2]'>";?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12" id="area">
						<table class="table table-striped">
							<tr>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
								<th>Saturday</th>
								<th>Sunday</th>
							</tr>
							<tr>
								<td>
									<select required class="form-control" name="Mon">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[5]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[5]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[5]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[5]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
								
								<td>
									<select required class="form-control" name="Tues">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[6]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[6]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[6]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[6]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
								<td>
									<select required class="form-control" name="Wed">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[7]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[7]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[7]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[7]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
								<td>
									<select required class="form-control" name="Thurs">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[8]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[8]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[8]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[8]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
								<td>
									<select required class="form-control" name="Fri">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[9]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[9]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[9]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[9]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
						
								<td>
									<select required class="form-control" name="Sat">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[10]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[10]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[10]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[10]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
						
								<td>
									<select required class="form-control" name="Sun">
										<option value="">Select Duty</option>
										<option value="Day Off" <?php if($rowx[11]=="Day Off") echo "selected"; ?>>Day Off</option>
										<option value="OPD" <?php if($rowx[11]=="OPD") echo "selected"; ?>>OPD</option>
										<option value="Ward" <?php if($rowx[11]=="Ward") echo "selected"; ?>>Ward</option>
										<option value="OT" <?php if($rowx[11]=="OT") echo "selected"; ?>>OT</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="row" style="margin-top: 20px;">
		        <div class="col-sm-12" style="text-align: center!important">
              <input type="Submit" id="bttn" name="submit-btn" id="submit-btn" class="btn btn-primary btn-lg">
              <input type="reset" id="btt2" value="Reset" name="submit-btn" id="submit-btn" class="btn btn-primary btn-sm">
            </div>
		      </div>
		     	</form>
				</div>
    	</div>
    </div>


	</main>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php } ?>
<?php include '../mydetails.php';?>