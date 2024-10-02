<?php
include "koneksi.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "UPDATE pengguna SET username='$username',password='$password' WHERE id=$id");

    header("Location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id=$id");

while ($data_pengguna = mysqli_fetch_array($result)) {
    $username = $data_pengguna['username'];
    $password = $data_pengguna['password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user data</title>
</head>

<body>
    <a href="index.php">Batal</a>
    <br /><br />

    <table>
        <form name="update_user" method="post" action="update.php">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username; ?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value=<?php echo $password; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </form>
    </table>
</body>

</html>