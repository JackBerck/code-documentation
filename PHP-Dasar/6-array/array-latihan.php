<?php
// array yang dibuat berikut adalah array numerik, yaitu array yang indeksnya angka
$mahasiswa = [["myaw", "119", "Informatika", "ngek@huft.com"], ["jak", "65", "Informatika", "hm@mgail.com"], ["248923", "nyu", "Informatika", "cek@mgail.com"]];

// untuk menghindari kesalah input seperti kasus tersebut maka dibutuhkan array asosiatif
// array asosiatif, adalah array yang indesknya berupa string yang kita buat sendiri untuk mengasosiasikan ke nilai yang ada di dalam array
?>

<?php
// array biasa
// membuat array
$hari = array("Senin", "Selasa", "Rabu"); // cara lama
$bulan = ["Januari", "Juni"]; // cara baru
$random = ["hai", true, 12]; // cara baru + mix tipe data

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($random);
echo "<br>";

// menampilkan salah satu elemen atau beberapa elemen pada array
echo $hari[1];
echo "<br>";

// menampilkan satu per satu elemen pada array
$angka1 = [1, 2, 3, 4, 5, 6, 7];

// array multidimensi, array yang di dalamnya terdapat array lagi
$angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo $angka2[1][1];
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
            margin-right: 10px;
            transition: all 0.7s ease;
        }

        div:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .kotak-2 {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            background-color: salmon;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            float: left;
            transition: all 0.7s ease;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- array biasa -->
    <?php
    foreach ($angka1 as $angka) :
    ?>
        <div class="kotak-1"><?= $angka; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <br>
    <!-- array multidimensi -->
    <?php
    foreach ($angka2 as $angka) :
    ?>
        <?php
        foreach ($angka as $a) :
        ?>
            <div class="kotak-2"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
    <div class="clear"></div>
</body>

</html>