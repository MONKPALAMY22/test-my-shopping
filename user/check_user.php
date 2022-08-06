<?php
    session_start();
    if($_SESSION['user_email'] == NULL AND $_SESSION['useer_password'] == NULL){
        header("Location:login.php");
    }
?>