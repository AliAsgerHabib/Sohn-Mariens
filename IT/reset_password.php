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
  <link rel="stylesheet" type="text/css" href="../styles/visitor_tag_creation.css">
  
  <script>
    $(document).ready(function()
    {
      $("#pid").change(function()
      {
        var values=$("#pid").val();
        $.post("user_details.php",{id:values},function(data)
        {
          $("#det").html(data).show();
        });
      });

    });
  </script>
  <style type="text/css">
  	@media (max-width: 576px) {
    .container{
        max-width: 92vw;
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
				<div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-9 box-body">

					<div class="row">
            <div class="heading col-sm-12" style="border-top: none;">
              <h1><img src="../images/pass1.png" style="width: 90px;height: auto;" > Reset Password</h1>
            </div>
          </div>
          <form action="change_password.php" method="POST">

          	<div class="row">
	            <div class="col-5 col-sm-5 col-md-3 col-lg-3 form-group ">
	              <label class="label-control label1" for="pid">Employee ID :</label>
	            </div>
	            <div class="col-4 col-sm-3 col-md-2 col-lg-2 form-group">
	              <input type="text" name="pid" id="pid" placeholder="Enter ID" class="" style="width: 97%;" required>
	            </div>  
          	</div>

          <div id="det">
            
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