<?php
session_start();
   require 'db.php';

    $pro_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['pro_id']);
    $bill_id=MYSQLI_REAL_ESCAPE_STRING($con,$_POST['bill_id']);
    $price = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['price']);
    $qty = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['qty']);
    $total = $price * $qty;
    $sql = "UPDATE bill_detail SET pro_qty = $qty , total = $total WHERE bill_id = $bill_id AND pro_id = $pro_id";
    //echo $sql;
    mysqli_query($con,$sql);
?>