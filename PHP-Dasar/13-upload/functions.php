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

    // gambar yang diupload akan disimpan di folder img, terus ambil nama gambarnya, lalu namanya diinsert ke dalam database
    // upload gambar
    // fungsi upload akan menjalankan 2 kerjaan, pertama mengecek apakah yang diupload adalah gambar atau bukan, kedua mengirimkan nama gambar ke database sehingga ketika fungsi upload gagal dijalankan maka tidak terdapat data yang masuk ke database
    $foto = upload();
    if (!$foto) {
        return false;
    }


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
    $fotoLama = htmlspecialchars($data["fotoLama"]);

    // cek apakah user memilih gambar baru atau tidak
    // error === 4 digunakan untuk mengecek apakah terdapat pengunggahan gambar, kalau terdapat penggunggahan gambar error === 0
    if ($_FILES["foto"]["error"] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

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

function cari($keyword)
{
    // query untuk mencari data mahasiswa berdasarkan keyword yang diinputkan oleh user menggunakan sintaks LIKE
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'";

    return query($query);
}

function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    // salah satu contoh hasil explode dari $namaFile adalah namafile.jpg menjadi ['namafile', 'jpg']
    // $ekstensiGambar = explode('.', $namaFile);
    // fungsi strtolower digunakan untuk mengubah huruf menjadi huruf kecil
    // fungsi end digunakan untuk mengambil elemen terakhir dari array
    $ekstensiGambar = strtolower(end(explode('.', $namaFile)));
    // fungsi in_array digunakan untuk mengecek apakah elemen yang dicari ada di dalam array atau tidak jika ada maka akan mengembalikan nilai true, jika tidak ada maka akan mengembalikan nilai false
    // rumus dari in_array adalah in_array(elemen yang dicari, array)
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 4000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru untuk menangani adanya nama file yang sama
    // fungsi uniqid digunakan untuk menghasilkan sebuah string unik berdasarkan waktu saat ini. string unik ini biasanya digunakan untuk memberikan nama file yang unik saat melakukan upload file.
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // fungsi move_uploaded_file digunakan untuk memindahkan file yang diunggah ke lokasi baru di server
    // rumus dari move_uploaded_file adalah move_uploaded_file(lokasi sementara file yang diunggah, lokasi tujuan file yang diunggah)
    move_uploaded_file($tmpName, 'assets/' . $namaFileBaru);

    return $namaFileBaru;
}
