<?php
// 1. koneksi ke database
// koneksi ke database menggunakan mysqli karena lebih modern dan terupdate ketimbang mysql
// berikut sintaks mysqli jika ingin mengoneksikannya ke database
// mysqli_connect("nama_hostnya", "username_mysqli", "password_mysqli", "nama_database")
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// 2. mengambil data dari tabel/query yang dituju ke database
// berikut sintaks mysqli mengambil data
// mysqli_query(koneksi_database, "sintaks_sqlnya_mauapa")
// $hasil = mysqli_query($conn, "SELECT * FROM mahasiswa");
// *tips: jika mengjalankan function seperti sintaks di atas even mau eror atau tidak nantinya tidak dapat ditampilkan dalam website, jika ingin cek eror atau tidak tinggal masukkan function tersebut ke dalam sebuah variabel lalu lakukan var_dump pada variabel tersebut
// $dataMhs = mysqli_query($conn, "SELECT * FROM mahasiswa");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// 3. mengambil data (fetch) dari object yang sebelumnya sudah diambil
// terdapat 4 macam cara fetching data
// mysqli_fetch_row()
// Fungsi ini digunakan untuk mengambil satu baris hasil query sebagai array numerik (indeks numerik).
// Setiap elemen array berisi nilai dari kolom dalam urutan indeks numerik, dimulai dari indeks 0.
// mysqli_fetch_assoc()
// Fungsi ini mengambil satu baris hasil query sebagai array asosiatif.
// Nama kolom menjadi kunci array, dan nilainya adalah nilai dari kolom tersebut.
// mysqli_fetch_array()
// Fungsi ini mengambil satu baris hasil query sebagai array yang dapat diakses dengan indeks numerik atau kunci asosiatif.
// Secara default, menggunakan indeks numerik dan asosiatif secara bersamaan.
// mysqli_fetch_object()
// Fungsi ini mengambil satu baris hasil query sebagai objek.
// Nama properti objek sama dengan nama kolom, dan nilai properti adalah nilai kolom tersebut.
// biasanya lebih sering pake yang mysqli_fetch_assoc()
// while ($nama_mhs = mysqli_fetch_assoc($hasil)) {
//     var_dump($nama_mhs);
// }
?>