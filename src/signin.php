<?php
    session_start();
    if(isset($_SESSION["id_user"])){
        //header("Location:home.php");
        header("refresh:0;url=home.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <title>Pets | Login User</title>
    <link rel= "icon" type="imagen/png" href="icons/dog.png">
    
</head>
<body bgcolor="#000000">
    <center>
        <img src="images/pet-shop (1).png" width="100"><br>
    </center>
    <form action="backend/signin.php" method="post">
<body>
<center>
    <form action="backend/signin.php" method="post">
    <input type="email" name="email" required placeholder="@">
        <input type="password" name="passwd" required placeholder="*****">
        <button>Login</button>
        &nbsp;<a href = "signup.html">Create an account</a>
        </center>
    </form>
</body>
</html>