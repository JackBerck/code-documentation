<?php
// asosiatif array adalah array dimana disetiap elemennya memiliki key atau identitas tersendiri atau indeksnya bisa kita bikin sendiri sehingga dapat kita susun dengan lebih terstruktur
// key pada asosiatif bertipe data string yang kita buat sendiri
// cara membuat keynya dengan cara memberikan tanda panah (=>)
// "key" => "isiKeyAtauElemen"

$mahasiswa = [
    ["nama" => "myaw", "nim" => "119", "jurusan" => "Informatika", "email" => "ngek@huft.com"],
    ["nama" => "jak", "nim" => "65", "jurusan" => "Informatika", "email" => "hm@mgail.com"],
    ["nim" => "248923", "nama" => "nyu", "jurusan" => "Informatika", "email" => "cek@mgail.com"]
];

// cara menampilkan array asosiatif sesuai dengan jenis array tersebut
// misal pada kasus tersebut array terluarnya masih menggunakan array numerik sehingga pemanggilan array masih menggunakan indeks
// di dalam arraynya lagi sudah berubah jenis menjadi array asosiatif sehingga pemanggilan arranya menggunakan keynya sendiri
// dan begitu seterusnya jika di dalamnya masih mengandung array *intinya menyesuaikan dengan jenis arraynya, kalau array numerik pakai indeks angka kalau array associative pakai key string sehingga kalau array numerik harus memperhatikan urutan elemennya sesuai dengan indeks sedangkan kalau array associative tidak usah memperhatikan urutan yang penting tahu akan keynya
// contoh

echo $mahasiswa[0]["nama"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>

    </style>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>
    <?php
    foreach ($mahasiswa as $siswa) :
    ?>
        <ul>
            <li>Nama : <?= $siswa["nama"]; ?></li>
            <li>NIM : <?= $siswa["nim"]; ?></li>
            <li>Jurusan : <?= $siswa["jurusan"]; ?></li>
            <li>Email : <?= $siswa["email"]; ?></li>
            <li>
                <img src="https://picsum.photos/200/300?nocache=<?php echo microtime(); ?>">
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>