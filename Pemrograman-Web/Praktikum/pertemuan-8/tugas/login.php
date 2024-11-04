<?php
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['username'])) {
    $_SESSION['LAST_ACTIVITY'] = time() + 10;
    header("Location: index.php");
    exit();
}

if(isset($_POST["register"])) {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];

    echo "<script>alert('Register berhasil');</script>";
}

if(isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    if (isset($_SESSION["username"]) && $_SESSION["username"] == $username && $_SESSION["password"] == $password) {
        $_SESSION['LAST_ACTIVITY'] = time() + 10;
        echo "<script>alert('Login berhasil');</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 8</title>
</head>
<body>
<h1>Register</h1>
<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit" name="register">Register</button>
</form>
<h1>Login</h1>
<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit" name="login">Login</button>
</form>
</body>
</html>
