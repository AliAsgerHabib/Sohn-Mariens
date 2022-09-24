<?php
  include '../database_connect.php';
  $id=$_REQUEST["x"];   
  $r=mysqli_query($con,"update admit set vistag=0 where pid='$id'");
  if($r)
  	header("location:visitor_tag_reclaim.php");
?>