<?php
session_start();
require "functions.php";

// cek apakah user sudah login atau belum menggunakan session
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// cek apakah tidak ada id di url dan jika ada akan diambil id nya
$id = $_GET["id"];
// Mengambil data mahasiswa berdasarkan id
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mahasiswa = mysqli_fetch_assoc(mysqli_query($conn, $query));

// cek apakah tombol ubah sudah dipencet atau belum
if (isset($_POST["ubah"])) {
    // cek data berhasil diubah
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "Gagal: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <!-- catatan: key berhubungan dengan name sehingga name dengan row data pada database harus sama -->
                <!-- mengambil informasi tiap mahasiswa -->
                <!-- mengambil id untuk dikirimkan ke function ubah -->
                <!-- mengambil nama foto untuk dikirimkan ke function ubah -->
                <input type="hidden" name="id" value="<?= $mahasiswa["id"] ?>">
                <input type="hidden" name="fotoLama" value="<?= $mahasiswa["foto"]; ?>">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mahasiswa["nama"] ?>" require>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" value="<?= $mahasiswa["nim"] ?>" require>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mahasiswa["email"] ?>" require>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mahasiswa["jurusan"] ?>" require>
            </li>
            <li>
                <img src="img/<?= $mahasiswa["foto"]; ?>" alt="">
                <label for="foto">Foto :</label>
                <input type="file" name="foto" id="foto">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>