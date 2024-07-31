<?php

// Autoload tiap file yang dibutuhkan agar tidak perlu require file satu per satu dan cukup require file init.php saja
// require_once 'Produk/CetakInfoProduk.php.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';

// Menggunakan fungsi spl_autoload_register untuk memanggil file yang dibutuhkan secara otomatis tanpa perlu require file satu per satu
spl_autoload_register(function ($class) {
    // require_once 'Produk/' . $class . '.php'; // Jika menggunakan ini, maka file harus diletakkan di folder Produk dan nama file harus sesuai dengan nama class
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
