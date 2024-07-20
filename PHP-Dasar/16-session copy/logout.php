<?php

// cek apakah user sudah login atau belum menggunakan session
session_start();

// $_SESSION = [] digunakan untuk menghapus semua session yang ada
$_SESSION = [];

// unset() digunakan untuk menghapus session
session_unset();

// session_destroy() digunakan untuk menghapus semua session yang ada
session_destroy();

// mengarahkan user ke halaman login.php
header("Location: login.php");
exit;
