<!DOCTYPE html>
<html>
<head>
	<title>Parcel Form</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/parcel_form.css">

</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<style type="text/css">
		@media (max-width: 576px) {
    .container{
        max-width: 92vw;
      }
      #area
      {
        overflow-x: scroll!important;
      }
    }
	</style>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9 box-body">
					<form action="Parcel_form_db.php" method="post">

						<div class="row">
							<div class="col-sm-12 heading">
			    			<h1><img src="../images/parc3.jpg" style="width: 90px;height:auto;" > Parcel Details</h1>
			  			</div>    
			 			</div>

			 			<div class="row">
						 <div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
						   <label class="control-label label1">Sender Name:</label>
					   </div>
						 <div class="col-7 col-sm-6 col-md-5 col-lg-4 form-group">
						   <input type="text" maxlength="25" name="sname" placeholder="Enter name here" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width:97%">
						 </div>
        		</div>

        		<div class="row">
							<div class="col-4 col-sm-4 col-md-3 col-lg-3 form-group">
								<label class="label1 control-label">Sender's Address:</label>
		          </div>
		          <div class="col-8 form-group col-sm-6 col-md-4 col-lg-5">     
								<textarea name="s_address" class="form-control w3-input w3-hover-light-gray" id="address"></textarea>
					   	</div>
        		</div>

        		<div class="row">
							<div class="form-group col-4 col-sm-4 col-md-3 col-lg-3 ">
							  <label class="label1 control-label">Arrival Date:</label>
		          </div>
		          <div class="form-group col-5 col-sm-5 col-md-4 col-lg-3">
		             <input type="date" name="adate" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width: 97%">
		          </div>
		          <div class="form-group col-4 col-sm-4 col-md-3 col-lg-3  text-right">
		            <label class="label1 label-control">Arrival Time:</label>
		          </div>
		          <div class="form-group col-5 col-sm-3 col-md-2 col-lg-2"> 
								<input type="time" name="atime" required class="form-control w3-input w3-hover-light-gray w3-animate-input" style="width: 97%">
							</div>
        		</div>
    
					<div class="row">
						<div class="form-group col-4 col-sm-4 col-md-3 col-lg-3">
							<label class="label1 label-control">Sent For:</label>
	          </div>
	          <div class="form-group col-6 col-sm-6 col-md-4 col-lg-3">
							<select name="sf" class="form-control w3-hover-light-gray">
								<option value=''>None</option>
	              <?php
	                include 'database_connect.php';
	                $r=mysqli_query($con,"select Name from departments");
	                while($row=mysqli_fetch_array($r))
	                  echo "<option value='$row[0]'>$row[0]</option>";
	              ?>
							</select>
						</div>
        	</div>

        	<div class="row" style="margin-top: 25px;margin-bottom: 20px;">
	          <div class="form-group col-sm-12 text-center">
	            <input type="Submit" name="submit-btn" id="bttn" class="btn">
	            <input type="reset" id="btt2" value="Cancel" name="submit-btn" id="submit-btn" class="btn btn-primary btn-sm">
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
<?php include '../mydetails.php';?>