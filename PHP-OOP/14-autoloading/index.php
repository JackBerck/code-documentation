<?php

// Autoload file composer agar tidak perlu require file satu per satu
require_once 'App/init.php';

$produk1 = new Game("GTA V", "David Jones", "Rockstar Games", 99999, 100);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 66666, 123);
$produk3 = new Komik("One Punch Man", "Yusuke Murata", "Shueisha", 30000, 321);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);

echo $cetakProduk->cetak();
