<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 3</title>
</head>
<body>
    <h1>Hallo <?= $_SESSION["username"] ?>👋</h1>
    <h2>Selamat datang di halaman latihan belajar sessin dan user authenthication!</h2>
    <p>Password anda adalah <?= $_SESSION["password"] ?></p>
</body>
</html>
