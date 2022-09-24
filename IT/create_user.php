<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/create_user.css">
  <script>
      $(document).ready(function()
        {
          $("#dept").change(function()
            {
              var values= this.value;
              $.post("get_names.php",{dept_name:values},function(data)
              {
                $("#area").html(data).show();
              });
          });
      });
    </script>

    <script>
      $(document).ready(function()
        {
          $("#user").change(function()
            {
              var values= this.value;
              $.post("check_user.php",{user_name:values},function(data)
              {
                if(data=="true")
                {
                	document.getElementById("area1").innerHTML=" User Name Unavailable ";
          				document.getElementById("bttn").disabled=true;
                }
                else
                {
                	document.getElementById("bttn").disabled=false;
          				document.getElementById("area1").innerHTML="  ";
                }
              });
          });
      });
    </script>

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
	
	<main>
		<div class="container">
			<div class="row">
				<div class="col-11 col-sm-12 col-md-12 col-lg-9 box-body">
				<form action="create_user_db.php" method="post">
					 
					<div class="row">
          	<div class="heading col-sm-12">
              <h1 class="heading"><img src="../images/user1.png" style="width: 86px;height: auto;"> &nbsp;Create User</h1>
            </div>
          </div>

          <div class="row">
          	<div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
            	<label class="label1" for="department">Department Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
              <select name="dept" id="dept" class= 'form-control w3-hover-light-gray w3-animate-input' style="width: 97%">
              <option value=""selected>Select Department</option>
              <?php
	              $r=mysqli_query($con, "select dept_id,Name from departments where isloginallowed ='1' ");
	              while ($row=mysqli_fetch_array($r)) {
	                echo "<option value='$row[0]'>$row[1]</option>";
	              }
              ?>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
             <label for="department" class="label1">Employee Name:</label>
            </div>
            <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group" id="area"></div>
          </div>

          <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
                     <label for="username" class="label1">Username:</label>
                    </div>
                  <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
                   <input type="email" name="user" id="user" class="form-control w3-input w3-hover-light-gray w3-animate-input"  style="width: 97%" placeholder="xyz@smhospital.com">
                  </div>
                  <div class="col-sm-7 col-md-5 col-lg-4 form-group" id="area1">
                   
                  </div>
                 </div>

          <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
                     <label for="Password" class="label1">Password:</label>
                    </div>
                  <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
                   <input type="password" name="pass" id="pass" class="form-control w3-input w3-hover-light-gray w3-animate-input" onchange="checkpass();" style="width: 97%" placeholder="Enter Password">
                  </div>
                 </div> 
                 <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-3 form-group">
                     <label for="Password" class="label1">Confirm Password:</label>
                    </div>
                  <div class="col-7 col-sm-7 col-md-5 col-lg-5 form-group">
                   <input type="password" name="passc" id="passc" class="form-control w3-input w3-hover-light-gray w3-animate-input" onchange="checkpass();" style="width: 97%" placeholder="Enter Password">
                  </div>
                  <div class="col-sm-7 col-md-5 col-lg-3 col-xl-4 form-group" id="msg">
                   
                  </div>
                 </div> 

                 <div class="row" style="margin-top: 30px;margin-bottom: 30px">
		              <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center">
                    <input type="Submit" id="bttn" value="Create User" name="submit-btn" class="btn btn-primary btn-lg">
                    <input type="reset" id="btt2" value="Cancel" name="submit-btn" class="btn btn-primary btn-sm">
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