<?php
include "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM pengguna");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
</head>

<body>
    <h1>Menampilkan data dari database</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Operasi</th>
        </tr>
        <?php
        while ($data_pengguna = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $data_pengguna["id"] . "</td>";
            echo "<td>" . $data_pengguna["username"] . "</td>";
            echo "<td>" . $data_pengguna["password"] . "</td>";
            echo "<td><a href='update.php?id=$data_pengguna[id]'>Edit</a> | <a href='delete.php?id=$data_pengguna[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>