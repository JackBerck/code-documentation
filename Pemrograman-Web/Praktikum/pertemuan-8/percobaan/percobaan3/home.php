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
    <?= "<h1>Hallo : " . $_SESSION["nama"] . "</h1>" ?>
    <h3>Selamat Datang Di Situs Kami</h3>
    <?= "<h2>Umur : " . $_SESSION["umur"] . " tahun</h2>" ?>
    <?= "<h2>Email : " . $_SESSION["email"] . "</h2>" ?>
</body>
</html>
