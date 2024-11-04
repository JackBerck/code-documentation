<?php

include '../connection.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO pembeli (nama, nomor_hp, alamat) VALUES ('$nama', '$nomor_hp', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pembeli</title>
</head>
<body>
<h1>Tambah Pembeli</h1>
<a href="<?= dirname($_SERVER['PHP_SELF']) ?>/index.php"><button>Kembali</button></a>
<form action="" method="POST">
    <table>
        <tr>
            <td>Nama Pembeli</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="nomor_hp"></td>
        </tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</body>
</html>
