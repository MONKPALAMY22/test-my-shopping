<?php 
    require 'db.php';
    $id=MYSQLI_REAL_ESCAPE_STRING($con,$_GET['bill_id']);
     $sql = "DELETE FROM bill WHERE bill_id = $id ";
     MYSQLI_QUERY($con,$sql);
     header('location:index.php');
?>