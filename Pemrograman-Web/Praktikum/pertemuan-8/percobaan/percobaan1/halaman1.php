<?php

session_start();

$_SESSION['nama'] = 'Diki Alfarabi Hadi';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 1 - Halaman 1</title>
</head>
<body>
    <h1>Kirim Data Session ke Halaman 2</h1>
    <?php
    echo "<h2>Username session di Halaman 1: </h2>";
    echo $_SESSION['nama'];
    echo "<br><br>";
    ?>
    <a href="halaman2.php">Ke Halaman 2</a>
</body>
</html>
