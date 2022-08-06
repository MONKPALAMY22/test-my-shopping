<?php 
    if($_POST){
        require 'db.php';
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $sql = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$password'";
        $rs = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($rs);

        if($row != NULL){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:index.php');
        }else{
            header('location:login.php');
        }
    }
?>