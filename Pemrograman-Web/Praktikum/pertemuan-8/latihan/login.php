<?php

session_start();
include 'koneksi.php';

if (isset($_SESSION['username'])) {
    header('Location: home.php');
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $hasil = mysqli_query($koneksi, $query);

    if (!(mysqli_num_rows($hasil))) {
        echo "
            <script>
                alert('Username atau password salah');
                document.location.href = 'login.php';
            </script>";
        exit();
    }

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    echo "
        <script>
            alert('Login berhasil');
            document.location.href = 'index.php';
        </script>";

    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Login</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <p>Belum punya akun? Daftar <a href="register.php">sini</a></p>
</body>
</html>
