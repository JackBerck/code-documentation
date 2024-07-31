<?php
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        return "$this->judul | $this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "Komik: {$this->getInfo()} ~ {$this->jmlHalaman} halaman.";
        return $str;
    }
}
