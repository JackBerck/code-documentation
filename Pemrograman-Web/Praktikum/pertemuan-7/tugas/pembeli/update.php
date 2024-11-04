<?php

include "../connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE pembeli SET nama = '$nama', nomor_hp = '$nomor_hp', alamat = '$alamat' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data gagal diupdate";
    }
}

$id = $_GET['id'];
$query = "SELECT * FROM pembeli WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data_pembeli = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Pembeli</title>
</head>

<body>
    <h1>Ubah Data Pembeli</h1>
    <a href="index.php"><button>Kembali</button></a>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data_pembeli['id']; ?>">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" value="<?= $data_pembeli['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="nomor_hp" value="<?= $data_pembeli['nomor_hp']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $data_pembeli['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>

</html>