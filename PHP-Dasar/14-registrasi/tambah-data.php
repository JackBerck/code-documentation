<?php
require "functions.php";

// cek apakah tombol tambah sudah dipencet atau belum
if (isset($_POST["tambah"])) {
    // cek data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "Gagal: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <!-- untuk inputan yang berupa string akan dikelola dengan method $_POST sedangkan untuk file akan dikelola oleh enctype dengan isi multipart/form-data -->
    <!-- ketika hal tersebut sudah dijalankan maka data gambar akan hilang terpisah dengan $_POST dan masuk ke $_FILES -->
    <!-- $_FILES dapat dianggap sebagai array asosiatif 2 dimensi. Ini karena $_FILES adalah array yang memiliki kunci utama (biasanya nama input file dalam formulir HTML) dan setiap kunci tersebut mengarah ke array lagi yang berisi beberapa informasi terkait file yang diunggah yaitu sebagai berikut -->
    <!-- $_FILES['nama_input']['name']: Nama asli file yang diunggah oleh pengguna.
    $_FILES['nama_input']['type']: Tipe MIME (Multipurpose Internet Mail Extensions) file. Misalnya, image/jpeg untuk file gambar JPEG.
    $_FILES['nama_input']['size']: Ukuran file dalam byte.
    $_FILES['nama_input']['tmp_name']: Lokasi sementara tempat file diunggah disimpan di server. File ini hanya ada sementara selama proses penanganan pengunggahan.
    $_FILES['nama_input']['error']: Kode kesalahan yang mungkin terjadi selama pengunggahan. Jika nilainya 0, pengunggahan berhasil tanpa kesalahan. -->
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <!-- catatan: key berhubungan dengan name sehingga name dengan row data pada database harus sama -->
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" require>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" require>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" require>
            </li>
            <li>
                <label for="foto">Foto :</label>
                <input type="file" name="foto" id="foto" require>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>