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

    // Membuat method dengan menggunakan visibility public agar bisa diakses dari luar class
    public function getLabel()
    {
        // Mengembalikan nilai dari property yang ada di dalam class
        // Gunakan $this-> (self operator) untuk mengakses property yang ada di dalam class, jika tidak menggunakan self operator maka PHP akan mencari variabel diluar class
        return "$this->penulis, $this->penerbit";
    }
}

// Cara membuat object instance dari class dengan menggunakan keyword new diikuti dengan nama class yang diinginkan
$produk1 = new Produk();
// Mengisi nilai property dari object yang telah dibuat dengan menggunakan operator -> (object operator) diikuti dengan nama property yang ingin diisi
$produk1->judul = "Naruto";

$produk2 = new Produk();
// Jika mengisi nilai property yang tidak ada pada object yang dibuat, maka property tersebut akan ditambahkan ke object tersebut
$produk2->tahunTerbit = 2000;

echo "Komik : " . $produk1->getLabel();
echo "Komik : " . $produk2->getLabel();
