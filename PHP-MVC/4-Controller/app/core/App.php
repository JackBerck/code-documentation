<?php

class App
{
    // Default controller, method, dan parameter
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
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
