<?php
include('koneksi.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE pengguna SET username = '$username', password = '$password' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

$id = $_GET['id'];
$query = "SELECT * FROM pengguna WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data_pengguna = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
    <h2>Update Data pada database!</h2>
    <a href="index.php"><button>Kembali</button></a>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data_pengguna['id']; ?>">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?= $data_pengguna['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?= $data_pengguna['password']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>