<?php
// move_uploaded_file adalah sebuah fungsi di php yang berfungsi untuk memindahkan file yang ada di komputer ke sebuah server

// file handling (bagaimana cara kita menangani file yang ada di dalam php menggunakan sintaks php)
// 1. <input type="file"> -> Ini adalah elemen HTML yang digunakan untuk membuat kontrol pengunggahan file di halaman web. Ini memungkinkan pengguna memilih satu atau lebih file dari perangkat lokal mereka. File-file yang dipilih dapat dikirimkan ke server sebagai bagian dari formulir.
// 2. enctype -> Atribut enctype digunakan dalam tag <form> untuk menentukan bagaimana data formulir harus dienkripsi sebelum dikirim ke server. Ini diperlukan saat menangani data biner, seperti file, untuk memastikan data dikirim dengan benar ke server.
// 3. $_FILES -> variabel superglobal yang digunakan untuk mengumpulkan informasi pengunggahan file yang dikirim dengan permintaan POST HTTP
// Berikut adalah beberapa kunci utama yang dapat ditemukan di dalam array $_FILES:
// $_FILES['nama_input']['name']: Nama asli file yang diunggah oleh pengguna.
// $_FILES['nama_input']['type']: Tipe MIME (Multipurpose Internet Mail Extensions) file. Misalnya, image/jpeg untuk file gambar JPEG.
// $_FILES['nama_input']['size']: Ukuran file dalam byte.
// $_FILES['nama_input']['tmp_name']: Lokasi sementara tempat file diunggah disimpan di server. File ini hanya ada sementara selama proses penanganan pengunggahan.
// $_FILES['nama_input']['error']: Kode kesalahan yang mungkin terjadi selama pengunggahan. Jika nilainya 0, pengunggahan berhasil tanpa kesalahan.
// 4. move_uploaded_file -> digunakan untuk memindahkan file yang diunggah ke lokasi baru di server. Fungsi ini menerima dua parameter: lokasi sementara file yang diunggah (biasanya diperoleh dari $_FILES['fileToUpload']['tmp_name']) dan lokasi tujuan di mana file harus dipindahkan.