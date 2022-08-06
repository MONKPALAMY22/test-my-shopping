<?php 
    if($_POST){
        require 'db.php';
        $email = mysqli_real_escape_string($con,$_POST['user_email']);
        $password = mysqli_real_escape_string($con,$_POST['user_password']);

        $sql = "SELECT * FROM user_login WHERE useremail = '$email' AND userpassword = '$password'";
        $rs = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($rs);

        if($row != NULL){
            session_start();
            $_SESSION['user_email'] = $email;
            $_SESSION['user_password'] = $password;
            header('location:userindex.php');
        }else{
            header('location:login.php');
        }
    }
?>