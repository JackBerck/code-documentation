<?php

// Jualan Produk
// Cara mendefinisikan sebuah class dengan menggunakan keyword class diikuti dengan nama class yang diinginkan, usahakan nama class menggunakan huruf kapital diawali dengan huruf besar (PascalCase)
class Produk
{
    // Membuat property dengan menggunakan visibility public agar bisa diakses dari luar class dan menerapkan nilai default agar property memiliki nilai awal
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // Membuat constructor dengan parameter yang memiliki nilai default agar ketika object dibuat tidak perlu mengisi parameter tersebut
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        // Mengisi nilai property dari object yang telah dibuat dengan menggunakan operator -> (object operator) diikuti dengan nama property yang ingin diisi
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat method dengan menggunakan visibility public agar bisa diakses dari luar class
    public function getLabel()
    {
        // Mengembalikan nilai dari property yang ada di dalam class
        // Gunakan $this-> (self operator) untuk mengakses property yang ada di dalam class, jika tidak menggunakan self operator maka PHP akan mencari variabel diluar class
        return "$this->penulis, $this->penerbit";
    }
}

// Cara membuat object instance dari class dengan menggunakan keyword new diikuti dengan nama class yang diinginkan
// $produk1 = new Produk();
// Mengisi nilai property dari object yang telah dibuat dengan menggunakan operator -> (object operator) diikuti dengan nama property yang ingin diisi
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// Jika mengisi nilai property yang tidak ada pada object yang dibuat, maka property tersebut akan ditambahkan ke object tersebut
// $produk2->tahunTerbit = 2000;

// Cara membuat object instance dari class dengan menggunakan keyword new diikuti dengan nama class yang diinginkan dan mengisi parameter yang ada di constructor agar lebih mudah ketimbang mengisi property satu per satu
$produk1 = new Produk("GTA V", "David Jones", "Rockstar Games", 999999);
$produk2 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 66666);
$produk3 = new Produk("One Punch Man", "Yusuke Murata", "Shueisha", 30000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Komik : " . $produk3->getLabel();
