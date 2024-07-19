<?php
require 'functions.php';

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
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>