<?php

// Membuat class abstract Produk agar tidak bisa diinstansiasi secara langsung dan harus diwariskan ke class lain untuk diinstansiasi
abstract class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    // Membuat method abstract getInfoProduk agar class turunan wajib membuat method getInfoProduk sendiri sesuai dengan kebutuhan class tersebut dan tidak bisa menggunakan method ini secara langsung
    abstract function getInfoProduk();

    public function getInfo()
    {
        return "$this->judul | $this->penulis, $this->penerbit";
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk()
    {
        $str = "Komik: {$this->getInfo()} ~ {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $jmlMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlMain = $jmlMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: {$this->getInfo()} ~ {$this->jmlMain} jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK: <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}



$produk1 = new Game("GTA V", "David Jones", "Rockstar Games", 99999, 100);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 66666, 123);
$produk3 = new Komik("One Punch Man", "Yusuke Murata", "Shueisha", 30000, 321);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);

echo $cetakProduk->cetak();
