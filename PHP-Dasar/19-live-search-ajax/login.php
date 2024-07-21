<?php
// jika ingin menggunakan session, harus memulai session terlebih dahulu
// fungsi session_start() harus diletakkan di awal file sebelum tag html atau teks fungsinya adalah untuk memulai session pada halaman
session_start();
require 'functions.php';

// cek apakah cookie remember me ada atau tidak
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    // hash() digunakan untuk mengenkripsi data
    // hash('sha256', $row['username']) digunakan untuk mengenkripsi username
    // rumus hash('sha256', $data_yang_mau_dienkripsi)
    // maksud dari sha256 adalah algoritma enkripsi yang digunakan
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

// cek apakah user sudah login atau belum menggunakan session
// isset() digunakan untuk mengecek apakah session login sudah ada atau belum
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// cek apakah tombol login sudah ditekan atau belum
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    // mysqli_num_rows digunakan untuk menghitung jumlah baris yang dihasilkan dari query
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        // password_verify digunakan untuk mengecek apakah password yang diinputkan sama dengan password yang ada di database atau password yang sudah dienkripsi
        // rumus password_verify($password_yang_diinputkan, $row['password_yang_ada_di_database'])
        if (password_verify($password, $row['password'])) {
            // set session
            // $_SESSION adalah variabel global yang bisa digunakan untuk menyimpan data agar bisa digunakan di halaman lain
            $_SESSION['login'] = true;
            // cek apakah remember me dicentang
            if (isset($_POST['remember-me'])) {
                // waktu cookie akan berakhir
                // time() + 60 artinya cookie akan berakhir dalam waktu 60 detik
                $expire = time() + 60;

                // untuk membuat cookie maka jalankan fungsi setcookie()
                // rumus setcookie('key', 'value', 'expire')
                // key adalah nama cookie
                // value adalah nilai dari cookie
                // expire adalah waktu cookie akan berakhir
                setcookie('id', $row['id'], $expire);
                setcookie('key', hash('sha256', $row['username']), $expire);
            }

            header('Location: index.php');
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="remember-me">Remember me</label>
        <input type="checkbox" id="remember-me" name="remember-me">
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>