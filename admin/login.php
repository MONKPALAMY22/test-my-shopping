<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        input[type="text"],input[type="password"],input[type="submit"] {
            display:block;
            padding: 5px;
            margin-bottom: 24px;
            width: 100%;
        }
        input[type="submit"]{
            background-color: darkred;
        }    
    </style>
</head>
<body background="img/anime.img.jpg" ;>
    <div class="d-flex vh-100">
        <div style="background-color: rgba(0, 255, 
        221, 0.274); width: 400px; height: 500px; border-radius: 24px; 
        padding-left: 16px; padding-top: 45px; padding-right: 16px; padding-bottom: 45px;" class="mx-auto align-self-center">
           <center> <img src="img/profile.png.png" alt="" width="100" margin-bottom:32px;>
           <H1 style="color: #ffffff; font-size: 30px; margin-bottom: 32px;">Login</H1></center>
            <form action="login_pc.php" method="post">
                <input type="text" name="email" id="" placeholder="Email">
                <input type="text" name="password" id="" placeholder="password">
                <input type="submit" value="login">
            </form>
            <center>
            <h1 style="color: rgb(255, 255, 255); font-size:10px">Homework's Monk palamy jalernsouk</h1></center>
        </div>
    </div>
    
    
    
</body>

</html>
