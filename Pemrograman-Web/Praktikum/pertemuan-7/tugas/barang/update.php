<?php

include "../connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $query = "UPDATE barang SET nama = '$nama', harga = '$harga' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) header("Location: index.php");
    else echo "Data gagal diupdate";
}

$id = $_GET['id'];
$query = "SELECT * FROM barang WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data_barang = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Barang</title>
</head>

<body>
    <h1>Ubah Data Barang</h1>
    <a href="index.php">Kembali</a>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data_barang['id']; ?>">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" value="<?= $data_barang['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga" value="<?= $data_barang['harga']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>

</html>