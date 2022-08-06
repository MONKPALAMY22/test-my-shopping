<?php
    session_start();
    if($_SESSION['email'] == NULL AND $_SESSION['password'] == NULL){
        header("Location:login.php");
    }
?>