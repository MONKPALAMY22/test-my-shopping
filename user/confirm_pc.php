<?php
session_start();
require 'db.php';
$bill_id = $_SESSION['bill_id'];
$name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['name']);
$lname = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['lname']);
$phone = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['phone']);
$total = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['total']);
$status = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['status']);
$location = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['location']);
// $total = $price * $qty;
$sql = "INSERT INTO bill VALUES($bill_id,current_timestamp(),'$name','$lname','$phone',$total,$status,'$location')";
mysqli_query($con,$sql);
header('location:confirm.php');

session_destroy();
header('location:userindex.php');
?>