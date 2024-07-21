<?php
require 'functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'";
$mahasiswa = query($query);
?>
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
    foreach ($mahasiswa as $mhs) : ?>
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