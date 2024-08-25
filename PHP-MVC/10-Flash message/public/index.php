<?php
if (!session_id()) session_start();


// Bootstraping digunakan untuk memanggil file init.php yang berisi seluruh file yang dibutuhkan oleh aplikasi kita
require_once "../app/init.php";

$app = new App;
