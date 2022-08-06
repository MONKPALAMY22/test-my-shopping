<?php 
    require 'db.php';
    $id=MYSQLI_REAL_ESCAPE_STRING($con,$_GET['pro_id']);
     $sql = "DELETE FROM bill_detail WHERE pro_id = $id ";
     MYSQLI_QUERY($con,$sql);
    header('location:cart.php');
?>