<?php

class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }


    public function parseURL()
    {
        // Mengecek apakah terdapat data yang dikirimkan oleh user melalui URL
        if (isset($_GET['url'])) {
            // Membersihkan URL dari tanda / di akhir URL
            $url = rtrim($_GET['url'], '/');
            // Membersihkan URL dari karakter-karakter yang tidak diinginkan
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Memecah URL berdasarkan tanda / menjadi array
            $url = explode('/', $url);
            return $url;
        }
    }
}
