<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: file1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data POST</title>
</head>

<body>
    <!-- isi dari $_POST adalah isi dari atribut name di halaman submit sebelumnya -->
     <h2>Selamat datang <?= $_SESSION["username"] ?></h2>
    <a href="get-and-post-latihan-post.php">Kembali ke halaman login</a>
</body>

</html>