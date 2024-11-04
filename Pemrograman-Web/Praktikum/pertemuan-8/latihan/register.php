<?php
session_start();

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($_POST['password'] != $_POST['confirm_password']) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai');
                document.location.href = 'register.php';
            </script>";
        exit();
    }

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    $hasil = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($hasil)) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }
}
?>

<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Register</h1>
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
                <td>Konfirmasi Password</td>
                <td><input type="password" name="confirm_password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Register"></td>
            </tr>
        </table>
    </form>
    <p>Sudah punya akun? Masuk <a href="login.php">sini</a></p>
</body>
</html>
