<!DOCTYPE html>
<html>
<head>
  <title>Prescription</title>
  <link rel="shortcut icon" href="../images/fav2.png">
  <?php
    include "../database_connect.php";
    include "header.php";
    include('../head.php');
    include('../bootstrap.php');
    $id=$_REQUEST["a"];
    $diag=$_POST["diag"];
    $type=$_POST["type"];
    $med=$_POST["med"];
    $freq=$_POST["freq"];
    $dur=$_POST["dur"];
    for($i=0;$i<sizeof($type);$i++)
    {
      if ($med[$i]!='') {
       $r=mysqli_query($con,"insert into medicine (diag,type,med,freq,dur,apid) values('$diag','$type[$i]','$med[$i]','$freq[$i]','$dur[$i]','$id')");
      }
      if($r)
      {
        $tests="";
        if(isset($_POST["tests"]))
        {
          $x=$_POST["tests"];
          for($i=0;$i<sizeof($x);$i++)
          $tests=$tests.$x[$i]."::";
        }
        $r=mysqli_query($con, "select Name,fname,age,gender,App_Date,doc_name from patients where id=$id");
        if($row=mysqli_fetch_array($r))
        {
          $r=mysqli_query($con, "insert into tests (pid,name,fname,age,gender,date,doc_name,test) values('$id','$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$tests')");
          if($r)
            header("location:print_prescription.php?a=$id");
          else echo mysqli_error($con);
        }
        
      }
      else 
        echo mysqli_error($con);
    }


    
  ?>