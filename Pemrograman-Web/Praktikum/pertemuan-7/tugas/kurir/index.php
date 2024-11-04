<?php
include '../connection.php';

$query = "SELECT * FROM kurir";
$result = mysqli_query($koneksi, $query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kurir</title>
</head>
<body>
<h1>Data Kurir</h1>
<a href="<?= dirname($_SERVER['PHP_SELF']) ?>/create.php"><button>Tambah data</button></a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama Kurir</th>
        <th>Nomor HP</th>
        <th>Operasi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    while($data_barang = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?= $data_barang["id"]; ?></td>
            <td><?= $data_barang['nama']; ?></td>
            <td><?= $data_barang['nomor_hp']; ?></td>
            <td>
                <a href="<?= dirname($_SERVER['PHP_SELF']) ?>/update.php?id=<?= $data_barang['id']; ?>"><button>Edit</button></a>
                <a href="<?= dirname($_SERVER['PHP_SELF']) ?>/delete.php?id=<?= $data_barang['id']; ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</body>
</html>


