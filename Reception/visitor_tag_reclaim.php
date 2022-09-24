<!DOCTYPE html>
<html>
<head>
	<title>Visitor Tag Reclaim</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include ('../head.php');
    include ('../bootstrap.php');
    include ('../database_connect.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/visitor_tag_creation.css">
  <style type="text/css">
  	.box-body
  	{
  		font-size: 18px!important;
  	}	
  </style>
  <script>
    $(document).ready(function()
    {
      $("#pid").change(function()
      {
        var values=$("#pid").val();
        $.post("patient_detail_reclaim.php",{id:values},function(data)
        {
          $("#det").html(data).show();
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
				<div class="col-xs-7 col-sm-12 col-md-12 col-lg-9 box-body">

					<div class="row">
            <div class="heading col-sm-12" style="border-top: none;">
              <h1><img src="../images/tag3.png" style="width: 100px;height: auto;"> Reclaim Visitor Tag</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-3 col-sm-4 col-md-3 col-lg-2 form-group ">
              <label class="label-control label1" for="pid">Admit ID :</label>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2 form-group">
              <input type="text" name="pid" id="pid" placeholder="Enter ID" class="" style="width: 97%;" required>
            </div>  
          </div>

          <div id="det">
            
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