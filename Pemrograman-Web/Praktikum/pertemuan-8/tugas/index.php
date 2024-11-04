<?php
session_start();

if (time() == $_SESSION['LAST_ACTIVITY']) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <meta http-equiv="refresh" content="1">
</head>
<body>
<h1>Hallo <?= $_SESSION["username"] ?>, dengan password <?= $_SESSION["password"] ?></h1>
<p>Waktu tersisa <?= $_SESSION["LAST_ACTIVITY"] - time() ?></p>
</body>
</html>
