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
    <title>Percobaan 2</title>
</head>
<body>
    <h1>Username session: </h1>
    <?php
    echo "<h2>Username session: </h2>";
    echo $_SESSION['nama'];
    echo "<br><br>";
    ?>
    <a href="set.php">Set Session</a>
    <a href="destroy.php">Destroy Session</a>
</body>
</html>
