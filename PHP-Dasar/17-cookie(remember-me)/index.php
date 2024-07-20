<?php
session_start();

// cek apakah user sudah login atau belum menggunakan session
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Agar sintaks php mudah untuk dibaca maka gunakan sintaks php yang lebih modern sehingga disarankan untuk memodularisasi file
// Agar file ini dapat terhubung dengan file functions.php maka gunakan sintaks require
require 'functions.php';
$dataMhs = query("SELECT * FROM mahasiswa");

// ketika tombol cari ditekan
if (isset($_POST["cari"])) {
    $dataMhs = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah-data.php">Tambah data mahasiswa</a>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" placeholder="Masukkan nama mahasiswa" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;
        foreach ($dataMhs as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin untuk dihapus?')">Hapus</a></td>
                <td><img src="assets/<?= $mhs["foto"]; ?>" alt=<?= "Foto " . $mhs["foto"]; ?> width="50"></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</body>

</html>