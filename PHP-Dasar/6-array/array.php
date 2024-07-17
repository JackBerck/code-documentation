<!-- array dalam php sangat penting terutama kalau sudah masuk ke database -->
<!-- 
dalam wikipedia => array adalah susunan sistematis dari objek objek yang serupa
dalam pemrograman => array adalah tipe data yang digunakan untuk mendeskripsikan kumpulan elemen(nilai atau variabel), yang tiap tiap elemennya memiliki index(index berawal dari 0)
alternatif penjelasan => array adalah variabel yang bisa menampung banyak nilai(bebas bisa campur boleh string, integer, boolean) -->

<!-- kenapa harus menggunakan array?
1. mempermudah pengelolaan nilai/value/data(penelusuran dan pencarian)
2. efektivitas pemanajemenan memori

karakteristik array:
1. variabel jamak yang mempunyai banyak elemen dan diacu dengan nama yang sama
2. kumpulan pasangan key dan nilai(key and value pair)
3. key adalah index pada array dengan tipe integer yang dimulai dari 0
4. array pada php memiliki fungsi/method default length untuk menghitung jumlah elemen di dalamnya
5. elemen pada array boleh memiliki tipe data yang berbeda -->

<?php 

// cara membuat array
// dan pada php kita bisa membuat array dengan tipe data yang berbeda
$hari = ["Senin", "Selesa", "Rabu", "Kamis", "Jumat", "Sabtu"];
// menampilkan array menggunakan pengulangan
for ($i = 0; $i < 7; $i++) {
    echo $hari[$i];
    echo "<br>";
}
// *catatan: ada cara yang lebih efektif untuk menentukan panjang array ketimbang manual menggunakan angka, yaitu dengan menggunakan count(), contoh: count($hari)

// menampilkan array menggunakan var_dump() dan print_r() yang akan menampilkan key(index) dan value(nilai atau elemen)
var_dump ($hari);
echo "<br>";
print_r ($hari);
echo "<br>";

// menambahkan elemen baru pada array
$hari[] = "Minggu"; // artinya menambahkan elemen baru pada akhir array
var_dump ($hari);

// pengulangan For each
// sintaks foreach adalah sebagai berikut
// foreach($array as $setiapElemenPadaArray) {
//     aksi;
// } 
$angka = [1, 2, 3, 4, 5, 6, 7];
$huruf = ["a", "b", "c", "d"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak-1 {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            float: left;
        }
        
        .kotak-2 {
            width: 50px;
            height: 50px;
            background-color: salmon;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    for($i = 0; $i < count($angka); $i++) :
    ?>
    <div class = "kotak-1"><?= $angka[$i]?></div>
    <?php endfor; ?>
    <div class="clear"></div>
    <?php
    foreach($huruf as $a) :
    ?>
    <div class = "kotak-2"><?= $a?></div>
    <?php endforeach; ?>
</body>
</html>