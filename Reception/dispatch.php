<?php
    include '../database_connect.php';
    $id=$_REQUEST["a"];
    date_default_timezone_set("Asia/Kolkata");
    $date=date("Y-m-d");
    $time=date("H:i");
    $r=mysqli_query($con, "update parcel set isdis='1' where id='$id'");
    $r=mysqli_query($con, "update parcel set dis_date='$date',dis_time='$time' where id='$id'");
    
    if ($r) {
        header("location:parcel_details.php");
    } else {
        echo mysqli_error($con);
    }
