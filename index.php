<?php
include("includes/auto_loader.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main style -->
    <link rel="stylesheet" href="style/login.css">
    <!-- font style -->
    <link rel="stylesheet" href="style/all.min.css">
    <title>User Connection</title>
</head>

<body>
    <header>
        <h1>shirrbook</h1>
    </header>
    <div class="form">
        <div class="head">
            <i class="fa-solid fa-lock"></i>
            <p>connect</p>
        </div>
        <form action="home.php" method="post">
            <label for="username">username</label>
            <div class="cont">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username">
            </div>
            <label for="password">password</label>
            <div class="cont">
                <i class="fa-solid fa-key"></i>
                <input type="password" name="password">
            </div>
            <a href="#">forgot password</a>
            <input type="submit" value="login">
        </form>
    </div>
    <footer>
        <p><span>&#169;</span>2022-2023 all rights preserved</p>
    </footer>
</body>

</html>