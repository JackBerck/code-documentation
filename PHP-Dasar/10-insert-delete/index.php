<?php
// Agar sintaks php mudah untuk dibaca maka gunakan sintaks php yang lebih modern sehingga disarankan untuk memodularisasi file
// Agar file ini dapat terhubung dengan file functions.php maka gunakan sintaks require
require 'functions.php';
$dataMhs = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah-data.php">Tambah data mahasiswa</a>
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
                <td><a href="">Ubah</a> | <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin untuk dihapus?')">Hapus</a></td>
                <td><img src=<?= $mhs["foto"]; ?> alt=<?= "Foto " . $mhs["foto"]; ?> width="50"></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</body>

</html>