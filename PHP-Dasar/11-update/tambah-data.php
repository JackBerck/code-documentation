<?php
require "functions.php";

// cek apakah tombol tambah sudah dipencet atau belum
if (isset($_POST["tambah"])) {
    // cek data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
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
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <!-- catatan: key berhubungan dengan name sehingga name dengan row data pada database harus sama -->
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" require>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" require>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" require>
            </li>
            <li>
                <label for="foto">Foto :</label>
                <input type="text" name="foto" id="foto" require>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>