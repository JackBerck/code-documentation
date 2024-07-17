<?php
// cek apakah tidak ada data di $_GET untuk memprevent kejadian yang di file sebelumnya sudah dijelaskan
if (
    !isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"]) || !isset($_GET["gambar"])
) {
    header("Location: get-and-post-latihan-get.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <ul>
        <li><img src="<?= $_GET["gambar"]; ?>" alt=""></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIM : <?= $_GET["nim"]; ?></li>
        <li>Email : <?= $_GET["email"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="get-and-post-latihan-get.php">Kembali ke beranda</a>
</body>

</html>