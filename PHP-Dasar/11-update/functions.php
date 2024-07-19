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
function query($query)
{
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

// 5. menambahkan data ke database
function tambah($data)
{
    global $conn;
    // htmlspecialchars digunakan untuk menghindari user memasukkan tag html
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $foto = htmlspecialchars($data["foto"]);
    $query = "INSERT INTO mahasiswa VALUES (
        '', '$nama', '$nim', '$email', '$jurusan', '$foto'
        )";

    // mysqli_query adalah fungsi untuk menjalankan query SQL di MySQL menggunakan koneksi yang sudah dibuka sebelumnya.
    // Fungsi ini memiliki dua parameter: koneksi ke database ($conn) dan query yang akan dieksekusi ($query).
    mysqli_query($conn, $query);

    // cek data berhasil ditambahkan
    // terdapat fungsi mysqli_affected_rows() yang digunakan untuk mengecek apakah data berhasil ditambahkan atau tidak
    // Fungsi ini mengembalikan jumlah baris yang terkena perubahan (diupdate, dihapus, atau dimasukkan) oleh query terakhir dijalankan.
    // Jika query adalah SELECT, maka fungsi ini akan mengembalikan jumlah baris yang dikembalikan oleh hasil query tersebut.
    // Jika tidak ada query sebelumnya atau query tersebut tidak mempengaruhi baris apa pun, maka mysqli_affected_rows akan mengembalikan nilai -1.
    // Fungsi ini digunakan untuk mendapatkan pesan kesalahan yang terkait dengan query MySQL terakhir yang dijalankan pada koneksi tertentu.
    // Jika tidak ada kesalahan, maka fungsi ini mengembalikan string kosong.
    // Jika terjadi kesalahan, pesan kesalahan dapat membantu Anda memahami masalah yang terjadi pada query.
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = ($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $foto = htmlspecialchars($data["foto"]);

    // query update digunakan untuk mengubah data tiap baris, dalam kasus ini digunakan untuk mengubah data mahasiswa
    $query = "UPDATE mahasiswa SET 
                nama = '$nama', 
                nim = '$nim', 
                email = '$email', 
                jurusan = '$jurusan', 
                foto = '$foto' 
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
