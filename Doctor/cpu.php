<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <style type="text/css">
  	@media (max-width: 576px) {
    .container{
        max-width: 92vw;
      }
    }
    .box-body
  	{
  		font-size: 18px;
  	}

  .error1
  {
    color:red;
    font-size: 18px;
    padding-bottom:10px;
    margin-bottom: 30px;
    text-align: center;
  }
  #msg
  {
    font-size: 18px;
    color:red;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="../styles/visitor_tag_creation.css">
  <script type="text/javascript">
      function checkpass()
      {
        var x=document.getElementById("pass").value;
        var y=document.getElementById("passc").value;
        if(x==y)
        {
          document.getElementById("bttn").disabled=false;
          document.getElementById("msg").innerHTML="  ";

        } 
        else
        {
          document.getElementById("msg").innerHTML=" Passwords don't match ";
          document.getElementById("bttn").disabled=true;
        } 
      }

    </script>
</head>
<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<?php
		$id=$_REQUEST["id"];
		$r=mysqli_query($con,"select employee.name, login_users.username,departments.name from employee inner join login_users on employee.id=eid inner join departments using(dept_id) where eid=$id");
	if($r)
	{
		if($row=mysqli_fetch_array($r))	
		{	
  ?>
	<main>
		<div id="back" style="margin-top: 10px;margin-left: 20px;">
      <a href="dashboard.php" class='btn btn-secondary'><i class="fas fa-arrow-circle-left"></i> Go back</a>
    </div>

    <div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9 box-body">

					<div class="row">
            <div class="heading col-sm-12" style="border-top: none;">
              <h1><img src="../images/pass1.png" style="width: 90px;height: auto;" > Reset Password</h1>
            </div>
          </div>
          <form <?php echo "action='cpu1.php?a=$id'";?> method="POST">

          	<div class="row">
	            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group ">
	              <label class="label-control label1" for="pid">Employee ID :</label>
	            </div>
	            <div class="col-4 col-sm-3 col-md-2 col-lg-2 form-group">
	              <?php echo $id;?>
	            </div>  
          	</div>

          <div id="det">
            <div class="row">
          <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group">
            <label class="control-label label1 " for="pname">Name:</label>
          </div>  
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 form-group">
            <?php echo "$row[0]";?> 
          </div>
          <div class="col-1 col-sm-1 col-md-1 col-lg-1 form-group"></div>
          <div class="col-5 col-sm-5 col-md-2 col-lg-2 form-group">
              <label class="control-label label1" for="GENDER">Department:</label>
            </div>
            <div class="col-6 col-sm-3 form-group">
              <?php echo "$row[2]";?>
            </div>
          </div>

          <div class="row"> 
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">User Name:</label>
            </div>
            <div class="col-6 col-sm-3 col-md-4 col-lg-5 form-group"> 
              <?php echo "$row[1]";?>
            </div>
          </div>
          
          <div class="row"> 
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">New Password:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 form-group"> 
              <input type="password" name="pass" id="pass" onchange="checkpass();" class="" style="width: 97%" placeholder="Enter Password">
            </div>
          </div>
          <div class="row"> 
            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group">
              <label class="control-label label1" for="Age">Confirm Password:</label>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 form-group"> 
              <input type="password" name="passc" id="passc" class="" onchange="checkpass();" style="width: 97%" placeholder="Enter Password">
            </div>
            <div class="col-sm-7 col-md-5 col-lg-4 form-group" id="msg" class="error1"></div>
          </div>
          <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
            <div class="col-sm-12" style="text-align: center">
              <input type="Submit" id="bttn" value="Change" name="submit-btn" class="btn btn-primary btn-lg">
              <input type="reset" id="btt2" value="Cancel" name="submit-btn" id="bttn2" class="btn btn-primary btn-sm">
            </div>
          </div>
          </div>
          </form>
				</div>
			</div>
		</div>
	</main>
	<?php } }?>
	<footer>
		Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>
<?php include '../mydetails.php';?>