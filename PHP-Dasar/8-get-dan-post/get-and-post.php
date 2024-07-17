<!-- variable scope atau lingkup variabel adalah cakupan atau wilayah dimana suatu variabel dapat diakses atau dimanipulasi -->
<!-- terdapat 3 jenis variable scope dalam php:
1. global scope, variabel yang dideklarasikan di bagian paling luar pada script php yang dapat diakses dari mana saja
2. local scope, variabel yang dideklarasikan di dalam suatu fungsi atau tidak di bagian paling luar pada script php sehingga hanya dapat diakses di dalam fungsi tersebut 
3. superglobals variable, variable yang sudah dimiliki oleh php yang dapat diakses dimanapun dan kapanpun -->


<?php
// global scope
$nama = "ngek";

function cek()
{
    // local scope
    $nama = "beda ngek";
    echo $nama;
}

cek();
echo "<br>";
echo $nama;
echo "<br>";

// superglobals variable, semua yang ada di dalam superglobals variable bertipe data array asosiatif
// berikut beberapa superglobals variabel
// 1. $_GET
// GET adalah salah satu metode yang digunakan untuk mengirim data dari client ke server melalui URL
// data dikirimkan melalui URL dengan menambahkannya setelah tanda tanya (?), yang artinya mengirimkan data ke halaman yang di acu menggunakan metode request get dan datanya akan dikirim melalui url dan datanya akan ditangkap menggunakan variable superglobals $_GET
// https://contohurl.com/index.php?key1=value1&key2=value2
// contoh
// http://example.com/index.php?nama=John&umur=25
// tidak usah menggunakan tanda petik, menggunakan rumus seperti di atas saja
// bisa juga menggunakan seperti ini
// $_GET["key1"] = "value1";
// $_GET["key2"] = "value2";
// untuk mengambil nilai yang dikirimkan melalui metode GET, kita menggunakan array global $_GET.
// contoh
// $nama = $_GET['nama'];
// $umur = $_GET['umur']; 

// 2. $_POST
// POST adalah salah satu cara untuk mengirimkan data dari client ke server yang umumnya digunakan untuk mengirimkan data formulir dari halaman web ke server sehingga diperlukan form dalam sebuah html
// sebenarnya bisa form bisa url kalau untuk POST, namun kebanyakan digunakan dalam sebuah form
// form HTML dapat dibuat dengan menentukan atribut method="POST" pada elemen <form>.
// contoh
// <form action="proses.php" method="POST">
//     <label for="nama">Nama:</label>
//     <input type="text" name="nama" id="nama">
//     <input type="submit" value="Kirim">
// </form>
// untuk mengakses data yang dikirimkan melalui metode POST, kita menggunakan array global $_POST.
// contoh
// $nama = $_POST['nama'];
// echo "Halo, $nama!";

// 3. $_REQUEST
// $_REQUEST bisa digunakan untuk mengumpulkan data formulir setelah dikirimkan baik dengan metode GET atau POST

// 4. $_SESSION
// &_SESSION adalah variabel global yang digunakan untuk menyimpan data sesi pengguna di server seperti username, password, dan lain-lain. Variabel ini akan tersedia di semua halaman yang diakses oleh pengguna selama sesi berlangsung. 

// 5. $_COOKIE
// $_COOKIE adalah variabel global yang digunakan untuk mengumpulkan data cookie yang dikirimkan ke server oleh browser pengguna. Cookie adalah data yang disimpan di browser pengguna dan berisi informasi tentang pengguna.

// 6. $_SERVER
// $_SERVER adalah variabel global yang digunakan untuk mengumpulkan informasi tentang server, file yang sedang dieksekusi, informasi tentang browser pengguna, dan lain-lain. Variabel ini adalah array asosiatif yang berisi beberapa elemen yang dapat digunakan untuk mengakses informasi tersebut.

// 7. $_ENV
// $_ENV adalah variabel global yang digunakan untuk mengumpulkan informasi tentang lingkungan server. Variabel ini adalah array asosiatif yang berisi beberapa elemen yang dapat digunakan untuk mengakses informasi tersebut.

?>