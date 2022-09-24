<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title>Login</title>
	<link rel="shortcut icon" href="images/fav2.png">
	
	<link rel="stylesheet" href="styles/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="styles/w3.css">
  
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <link rel="stylesheet" type="text/css" href="styles/index.css">

  
</head>

<body>
	<header>SOHN MARIENS HOSPITAL AND LABS</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="box-body col-8 col-sm-8 col-md-6 col-lg-5 col-xl-4">
					<form action="login_backend.php" method="post">
						<div class="row">
							 <div class="col-12 col-sm-12 col-md-12 col-lg-12 form-group" style="text-align: center;margin-bottom: 0px;">
               <h1 class="heading">Login</h1>
              </div> 
						</div>

						<div class="row">
              <div class="col-sm-12">
                <div class="error">
                  <?php
                    if(isset($_SESSION["err"]))
                    {
                      echo $_SESSION["err"];
                    }
                  ?>
                </div>
              </div>  
            </div>

            <div class="row">
            	<div class="marg"></div>
              <div class="col-2 col-sm-3 col-md-3 col-lg-3 form-group" style="text-align: center;margin-bottom: 0px;">
            		<i class="fas fa-user" style="font-size: 25px;"></i>
            	</div>
            	<div class="col-9 col-sm-8 col-md-8 col-lg-8 form-group"> 
                <input type="text" name="uname" id="enm" class="" placeholder="Enter Username">
              </div>  
            </div>
            
            <div class="row">
              <div class="marg"></div>
              <div class="col-2 col-sm-3 col-md-3 col-lg-3 form-group" style="text-align: center;margin-bottom: 0px;">
                <i class="fas fa-lock"  style="font-size: 25px;"></i>
              </div>  
              <div class="col-9 col-sm-8 form-group">
                <input type="password" name="pass" id="pass" class="" placeholder="Enter Password">
              </div>
            </div>

            <div class="row">
            	<div class="col-4 col-sm-4 form-group" style="text-align: center"></div>
            	<div class="form-group col-5 col-sm-4" style="text-align: center;margin-bottom: 0px;margin-top: 10px;">
              	<input type="submit" value="Login"  class="login-btn btn btn-block">
            	</div>  
            </div>

          </form>
				</div>
			</div>
		</div>
	</main>

	<footer>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script>    <a> Sohn Mariens Hospital and Labs</a>
	</footer>
</body>
</html>

<?php
  $_SESSION["err"]="";
?>