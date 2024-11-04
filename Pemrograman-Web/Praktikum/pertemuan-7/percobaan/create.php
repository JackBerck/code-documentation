<?php
include('koneksi.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO pengguna (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create/Add</title>
</head>
<body>
    <h2>Memasukkan Data pada database!</h2>
    <form action="create.php" method="POST">
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
                <td></td>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</html>
