<?php
$mahasiswa = [
    [
        "nama" => "Zaki Dzulfikar",
        "nim" => "H1D023065",
        "email" => "zakidzlfkr@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "https://picsum.photos/200/300?nocache=" . rand(),
    ],
    [
        "nama" => "Dewi Kania",
        "nim" => "H1D023999",
        "email" => "deweikania@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "https://picsum.photos/200/300?nocache=" . rand(),
    ],
    [
        "nama" => "Jack Berck",
        "nim" => "H1D023000",
        "email" => "berckjack@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "https://picsum.photos/200/300?nocache=" . rand(),
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
    <style>
        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <!-- namun disuatu saat yang akan datang kita tidak diharuskan mengirimkan semua data melalui url dan request method get dikarenakan terdapat batasan karakter yang ada pada url dan hal tersebut juga tidak efektif -->
    <!-- kalau sudah belajar database nanti kita cukup mengirimkan identifiernya saja -->
    <!-- di sini juga terdapat suatu masalah, yaitu ketika seorang user langsung mengakses file php melalui url, tidak melalui link yang kita berikan data akan menyebabkan suatu masalah seperti file php yang diakses tidak memiliki data -->
    <!-- atau bahkan user tersebut dapat meretas file php melalui cara tersebut sehingga hal tersebut harus ditangani -->
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $siswa) : ?>
            <li>
                <a href="./data/get-and-post-latihan.php?nama=<?= $siswa["nama"]; ?>&nim=<?= $siswa["nim"]; ?>&email=<?= $siswa["email"]; ?>&jurusan=<?= $siswa["jurusan"]; ?>&gambar=<?= $siswa["gambar"]; ?>"><?= $siswa["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>