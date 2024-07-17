<!-- kelebihan menggunakan form adalah ketika kita mengirimkan data ke suatu tempat, data tersebut tidak terlihat, tidak ditampilkan juga di dalam url -->
<?php
session_start();
if (isset($_POST["kirim"])) {
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {
        $_SESSION["username"] = $_POST["username"];
        header("Location: halaman-latihan-post.php");
        exit;
    } else {
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <!-- untuk menentukan datanya akan dikirim kemana? dibutuhkan setidaknya 2 atribut wajib dalam tag form
    1. action, untuk mengacu ke file yang ingin disimpan datanya, jika tidak diisi maka data yang dikirimkan dikembalikan atau disimpan lagi ke dalam file form nya
    2. method, untuk menentukan method apa yang akan dijalankan, kalau methodnya dikosongkan maka akan secara default nilainya berupa GET -->
    <!-- jika hal tersebut tidak dilakukan atau hanya dilakukan salah satu saja, maka akan ada nilai default -->
    <!-- if isset digunakan jika action kosong atau data ingin dikirimkan ke halaman itu sendiri namun kan data belum ada yang dikirimkan sehingga dilakukan isset terlebih dahulu -->
    <?php if (isset($error)) : ?>
        <p style="color: red">username/password salah</p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="username">Masukkan username :</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Masukkan password: </label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="kirim">Kirim!</button>
    </form>
</body>

</html>