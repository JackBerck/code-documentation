<?php
require 'functions.php';

// registrasi user
// hal yang pertama kali dilakukan adalah menghubungkan file functions.php dengan file registrasi.php
// setelah itu membuat tabel user di database phpdasar
// kemudian membuat form registrasi di file registrasi.php
// kemudian membuat function registrasi di file functions.php
// untuk lebih mengamankan data user yang diinputkan, maka data tersebut dienkripsi terlebih dahulu

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan. Silahkan login!');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Regitrasi</title>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="confirm-password">Konfirmasi password :</label>
        <input type="password" name="confirm-password" id="confirm-password">
        <br>
        <button type="submit" name="register">Register</button>
    </form>
</body>

</html>