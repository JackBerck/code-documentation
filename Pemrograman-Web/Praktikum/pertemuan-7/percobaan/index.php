<?php
include('koneksi.php');

$query = "SELECT * FROM pengguna";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Read</title>
</head>
<body>
<h1>Menampilkan data dari database!</h1>
<a href="create.php"><button>Tambah data</button></a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Operasi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while($data_pengguna = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?= $data_pengguna["id"]; ?></td>
                <td><?= $data_pengguna['username']; ?></td>
                <td><?= $data_pengguna['password']; ?></td>
                <td>
                    <a href="update.php?id=<?= $data_pengguna['id']; ?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $data_pengguna['id']; ?>"><button>Delete</button></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</body>
