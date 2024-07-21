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

// konfigurasi pagination
// pagination adalah sebuah sistem yang memungkinkan kita untuk membatasi jumlah data yang ditampilkan pada halaman web
// pagination biasanya digunakan pada halaman yang menampilkan data dalam jumlah besar

// 1. $jumlahDataPerHalaman -> variabel yang digunakan untuk menentukan jumlah data yang akan ditampilkan pada setiap halaman
$jumlahDataPerHalaman = 3;

// 2. $jumlahHalaman -> variabel yang digunakan untuk menampung jumlah halaman yang ada sesuai dengan data yang ada
// ceil() adalah fungsi matematika di php yang digunakan untuk membulatkan angka ke atas
// count() adalah fungsi di php yang digunakan untuk menghitung jumlah elemen dalam array
$jumlahHalaman = ceil(count(query("SELECT * FROM mahasiswa")) / $jumlahDataPerHalaman);

// 3. $halamanAktif -> variabel yang digunakan untuk menentukan halaman yang sedang aktif
if (isset($_GET["halaman"])) {
    $halamanAktif = $_GET["halaman"];
} else {
    $halamanAktif = 1;
}

// 4. $awalData -> variabel yang digunakan untuk menentukan data awal yang akan ditampilkan pada setiap halaman
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// data yang ditampilkan pada setiap halaman dan total jumlah halaman
$dataMhs = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
        <input id="keyword" type="text" name="keyword" size="30" placeholder="Masukkan nama mahasiswa..." autocomplete="off" autofocus>
        <!-- <button type="submit" name="cari" id="cari-button">Cari</button> -->
        <h1 id="loading">Loading...</h1>
    </form>
    <!-- Navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">←</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">→</a>
    <?php endif; ?>
    <div id="container">
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
    </div>
    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>