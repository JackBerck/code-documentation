<?php

include "../connection.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];

    $query = "UPDATE kurir SET nama = '$nama', harga = '$nomor_hp' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if($result){
        header("Location: index.php");
    }else{
        echo "Data gagal diupdate";
    }
}

$id = $_GET['id'];
$query = "SELECT * FROM kurir WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data_kurir = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Kurir</title>
</head>
<body>
<h1>Ubah Data Kurir</h1>
<a href="index.php"><button>Kembali</button></a>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data_kurir['id']; ?>">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_barang" value="<?= $data_kurir['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="nomor_hp" value="<?= $data_kurir['nomor_hp']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Ubah"></td>
        </tr>
    </table>
</form>
</body>
</html>