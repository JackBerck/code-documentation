<!-- alur kendali atau control flow adalah bagaimana alur program kita dibaca oleh program -->

<!-- pengulangan adalah kondisi dimana kita ingin mengerjakan sebuah blok program secara berulang tanpa menulis ulang program tersebut-->
<!-- 1. for
2. while
3. do while
4. for each -->

<?php
// 1. for merupakan keyword yang digunakan untuk pengulangan sama seperti while akan tetapi lebih ringkas dan rapi(sangat disarankan untuk melakukan pengulangan)
// jika ingin menggunakan for tinggal panggil aja keywordnya yaitu for
// sintaks for seperti berikut
// for (inisialisasi; kondisi terminasi; increment atau decrement) {
// aksi
// }
$i = 0;
for ($i; $i < 5; $i++) {
    echo "hai";
}

// 2. while merupakan keyword yang digunakan untuk pengulangan
// jika ingin menggunakan while tinggal panggil aja keywordnya yaitu while
// sintaks while seperti berikut
// while(kondisi terminasi) {
//   aksi
// }
// *cara bacanya: setiap kondisi di dalam while bersifat true, maka jalankan aksi di dalamnya
// sehingga terdapat 2 cara menghentikan while
// 1. dihentikan dan dijalankan oleh user, jadi user nantinya memiliki kendali penuh dalam menjalankan pengulangan.
// 2. diberhentikan dan dijalankan oleh program itu sendiri, jadi programnya sendiri yang akan menentukan loopingnya mau berapa kali
$j = 0;
while ($j < 5) {
    echo "hlo";
    $j++;
};

// 3. do while sama dengan while untuk konsepnya, namun yang membedakan adalah kalau while jalankan dulu perintah awalnya baru cek dulu kondisinya, sehingga setidaknya ada sekali program yang ada di dalam do while dijalankan
$k = 0;
do {
    echo "cek";
} while ($k < 0);

// 4. for each, untuk for each nanti setelah penggunaan array pada php agar tidak membingungkan karena for each ini dikhususkan untuk pengulangan array

?>



<!-- pengkondisian -->
<!-- 1. if else
2. if else if else
3. ternary operation
4. switch -->

<?php 
// 1. if else merupakan keyword yang digunakan untuk melakukan pengkondisian yang jika kondisinya true akan melakukan if suatu aksi yang berada di dalam kondisi aksi true tersebut(misalkan aksi A) dan jikalau false maka akan melakukan else atau suatu aksi lain atau keluar dari block if tersebut(misalkan aksi B)
// jika ingin menggunakan if else tinggal panggil aja keywordnya yaitu if else
// dan jika ingin menggunakan else tinggal panggil aja keywordnya yaitu else
// sintaks dasar else seperti berikut
// if (kondisi) {
  // aksi
// } // else {
//   aksi
// }
if(1 < 4) {
    echo "its true";
} else {
    echo "its false";
}

// 2. else if merupakan keyword yang digunakan untuk melakukan pengkondisian yang memiliki beberapa aksi dan kondisi(bisa menggunakan banyak else if untuk melakukan aksi lain, tidak seperti if dan else yang hanya memiliki satu aksi)
// dan jika ingin menggunakan else if tinggal panggil aja keywordnya yaitu else if
// sintaks dasar if seperti berikut
// if (kondisi1) {
//   aksi1
// } else if (kondisi2) {
//   aksi2
// } else {
//   aksiTerakhir
// }
if(1 < 4) {
    echo "its true";
} else if (1 > 0) {
    echo "its true too";
} else {
    echo "its false";
}

// 3. operator ternary atau operator kondisional ini merupakan operator ternary yang membutuhkan 3 operand
// operator ternary digunakan untuk melakukan pengecekkan pada sebuah kondisi dan menentukan sebuah nilai yang dihasilkan ketikan kondisinya bernilai true atau false
// (kondisi) ? true : false
// jika kondisinya benar maka akan mengambil nilai yang ada di kiri, jika salah maka akan mengambil nilai yang ada di kanan
$x = 3;
echo ($x % 2 == 0) ? "genap" :  "ganjil";


// 4. switch ini penggunaannya sama seperti if dan else, akan tetapi switch hanya memiliki satu kondisi nanti switch akan mengecek nilai hasil dari kondisinya
// jika ingin menggunakan switch tinggal panggil aja keywordnya yaitu switch
// switch (ekspresi) {
//   case 'nilai 1':
//     aksi 1
//     break;
//   case 'nilai 2':
//     aksi 2
//     break;
//   case 'nilai n':
//     aksi n
//     break;
//   default:
//     aksi default
// }
// atau dalam bahasa sendiri
// switch (ekspresi) {
//   case 'nilai atau kasus atau hasil ekspresi 1':
//     aksi 1
//     break;
//   case 'nilai atau kasus atau hasil ekspresi 2':
//     aksi 2
//     break;
//   case 'nilai atau kasus atau hasil ekspresi n':
//     aksi n
//     break;
//   default:
//     aksi default
// }
// catatan!
// break untuk mengeluarkan pengkondisian dari batasnya setelah sudah terseleksi aksinya
$nomorHari = 3;
switch ($nomorHari) {
    case 1:
        $hari = "Minggu";
        break;
    case 2:
        $hari = "Senin";
        break;
    case 3:
        $hari = "Selasa";
        break;
    case 4:
        $hari = "Rabu";
        break;
    case 5:
        $hari = "Kamis";
        break;
    case 6:
        $hari = "Jumat";
        break;
    case 7:
        $hari = "Sabtu";
        break;
    default:
        $hari = "Nomor hari tidak valid";
}

?>