<?php 
    require 'db.php';
    $bill_id = mysqli_real_escape_string($con,$_GET['bill_id']);
    // echo $bill_id;
    $sql = "UPDATE bill SET status = 1 WHERE bill_id = $bill_id";
    if(mysqli_query($con,$sql)){
        header('location:index.php');
    }
?>