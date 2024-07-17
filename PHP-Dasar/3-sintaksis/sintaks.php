<!-- dalam php, penulisan php atau penyimpanan file atau folder php harus disimpan di dalam htdocs yang berada di dalam folder xampp, jadi berbeda dengan html, css, maupun js yang bisa disimpan dimanapun -->

<!-- dan sebelum menjalankan atau membuat file php, jalankan terlebih dahulu sistem apache di dalam aplikasi xampp dan cara mengakses atau membuka file php tersebut harus melalui localhost xampp di browser dan arahkan direktorinya ke direktori dimana file php tersebut disimpan -->

<!-- sebelum menuliskan sintaks php, tulis terlebih dahulu <?php ?> -->

<?php
/* seluruh kode dalam php ditulis dalam tag ini */

/* dalam php juga spasi atau enter tidak berpengaruh pada jalannya kode sama seperti html */

/* 1. dalam php penulisan comment juga mirip dengan html jika dalam satu baris kode maka digunakan comment double slash "//" kalau lebih dari satu baris kode "/* kode yang mau dikomentar */


/* 2. standar output, sebuah perintah di php yang digunakan untuk mencetak sesuatu di layar
a. echo atau print (outputan standar php)
b. print_r (khusus mencetak isi array)
c. var_dump (melihat isi dari suatu variable, nanti akan muncul informasi mengenai variable tersebut)
*print_r dan var_dump biasanya dipake untuk debugging atau tahap development, bukan untuk pengaplikasian server
kedua sintaks tersebut akan menampilkan tipe data dari variable tersebut dan ukuran dari variable tersebut
*/

/* *tambahan: php tidak bisa diinspect sehingga nanti yang muncul kode html karena yang tampil di user adalah html */

// standar output
echo "hel\"lo\n";
print "hai\n";
// untuk melakukan debugging atau melihat isi dari array atau variable
print_r ("jooo\n");
var_dump ("heyo\n");
// ada hal unik, jika print tipe data boolean nanti kalau print true akan muncul angka 1 kalau false tidak muncul apa apa
// dalam print juga bisa kita menuliskannya dengan petik 1 maupun petik 2
// jika di dalam petik tersebut terdapat petik yang sama seperti echo jum'at bisa gunakan back slash untuk mengakalinya contoh
// echo 'Jum\'at';


/* 3. penulisan sintaks dalam php
a. php dalam html
b. html dalam php
*/

// 4. dalam php, penulisan variabel cukup dengan tanda dolar "$" setelah itu diikuti dengan nama dan tanpa mendefinisikan tipe datanya sehingga mirip dengan js, dan penulisannya seperti biasa disarankan menggunakan camel case dan huruf pertama tidak boleh angka

$na = "naa";
// sedikit catatan dalam penulisan petik 1 atau 2, petik 2 sedikit lebih sangar ketimbang kutip 1 karena bisa menggunakan konsep interpolasi dimana di dalam tanda kutip tersebut kita dapat menuliskan suatu variabel atau hal lain sehingga dapat diproses, sedangkan kutip 1 kalau terdapat variabel tidak akan terbaca isi dari variabel tersebut
echo "hawwooo $na \n";
echo 'hawwo $na \n';

// 5. aritmatika adalah operator yang biasa disebut juga matematika yang berisi +(pertambahan angka atau yang lainnya), -(pengurangan angka atau yang lainnya), *(perkalian angka atau yang lainnya), /(pembagian angka atau yang lainnya), dan %(modulus atau disebut juga sisa bagi)
$satu = 1;
$dua = 2;
echo $satu + $dua;

// 6. penggabungan string atau concatenation adalah penggabungan 2 atau lebih string atau hal lain mungkin menggunakan operator titik "."
$depan = "jaa";
$belakang = "pi";
echo $depan . " " . $belakang;

// 7. assignment adalah operator penugasan atau pendefinisian, ada =, +=, -=, *=, /=, %=, .=
// maksud dari penugasan ini ialah kita menugaskan suatu nilai ke dalam suatu variabel(nantinya menggunakan =), atau istilahnya mendeklarasikan suatu variabel dengan value lain bisa string, angka, dll
$namaDepan = "haii";
$namaDepan .= " heeooo";
echo $namaDepan;

// 8. perbandingan adalah operator yang membandingan 2 operand menggunakan simbol atau operator perbandingan, ada >, <, <=, >=, ==, !=
echo (2 > 1);

// 9. identitas adalah operator yang sama seperti perbandingan namun juga membandingkan tipe datanya juga, ada ===, !==, dll *pokonya sama dengannya nambah 1
echo (2 === "2");

// 10. logika adalah operator ya logika seperti biasa seperti and atau or atau not, ada &&, ||. !
echo (2 < 20 && 10 > 20);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php dalam html -->
    <h1>halllooooo <?php echo "kooo";?></h1>
    <!-- html dalam php -->
    <?php 
        echo "<h1>ydfgsaudf</h1>";
    ?>
</body>
</html>