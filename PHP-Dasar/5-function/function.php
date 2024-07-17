<!-- function adalah potongan program atau baris baris kode yang kita buat untuk mempermudah kita saat melakukan pemrograman, kode yang kita buat tadi bisa dikasih nama dan bisa kita panggil secara berulang ulang -->

<!-- terdapat 2 jenis function
1. user defined function adalah fungsi yang didefinisikan atau dibikin oleh pengguna itu sendiri sesuai kebutuhan program
2. built-in function adalah fungsi-fungsi yang sudah disertakan dalam bahasa pemrograman dan dapat digunakan tanpa perlu mendefinisikannya terlebih dahulu-->

<?php 
// built in function bisa dicek di link berikut https://www.php.net/manual/en/funcref.php
    // date()
    echo date("l, d M Y"); // function date() memerlukan setidaknya 1 parameter, l(hari), d (tanggal), M (bulan), Y (tahun)
    echo "<br>";
    
    // time()
    // UNIX Timestamp / EPOCH time yang akan muncul jika funciton time() dijalankan
    echo time(); //function time() tidak memerlukan paramter tidak apa apa
    echo "<br>";
    
    // gabungan date() dan time()
    echo date("l", time() + 3*24*60*60);
    echo "<br>";
    
    // mtime()
    // mktime(jam, menit, deitk, bulan, tanggal, tahun)
    echo date("l", mktime(0, 0, 0, 8, 2, 2003));
    echo "<br>";

    // strtotime
    echo date("l", strtotime("2 aug 2003"));
    // terdapat banyak function bawaan php, beberapa built-infunction yang sering dipake
    // string
    // 1. strlen(), menghitung panjang string
    // 2. strcmp(), menggabungkan beberapa string
    // 3. explode(), memecah sebuah string menjadi array
    // 4. htmlspecialchars(), untuk menjaga website agar tidak dapat menjalankan suatu kode yang diinputkan user -->

    // <!-- terdapat juga function bawaan php untuk membantu kita dalam proses production
    // 1. var_dump(), mencetak isi dari array, variabel, dll
    // 2. isset(), apakah sebuah variabel sudah dibikin atau belum (menghasilkan boolean)
    // 3. empty(), apakah sebuah variabel tersebut sudah terisi atau masih kosong
    // 4. die(), untuk memberhentikan program
    // 5. sleep(), untuk memberhentikan program dalam beberapa waktu saja
?>

<?php 
// 2. user defined function
// beberapa aturan user defined funtion
// a. fungsinya harus didefinisikan terlebih dahulu dalam suatu variabel
// b. bisa mengembalikan nilai (return) atau tidak namun disarankan agar tetap mengembalikan return
// c. berbeda dengan js yang bisa memberikan argumen kurang dari parameternya, di php harus sama jumlah antara parameter dan argumennya sehingga sebaiknya kita memberikan nilai default dengan memberikan nilai pada parameter functionnya
// function namaFunction() {
//     aksi;
// }
function greetings($waktu = "datang", $name = "User") {
    return "Heeyyooo... selamat $waktu, $name";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h3><?php echo greetings("pagi", "Nyaw"); ?></h3>
</body>
</html>