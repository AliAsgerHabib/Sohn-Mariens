<?php
    include '../database_connect.php';
    $id=$_REQUEST["a"];
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y-m-d");
    $time=date("H:i");
    $r=mysqli_query($con, "update admit set isadmit='0' where pid='$id'");
    $r=mysqli_query($con, "update admit set dis_date='$date',dis_time='$time' where pid='$id'");
    
    if ($r) {
        header("location:discharge_slip.php?a=$id");
    } else {
        echo mysqli_error($con);
    }
