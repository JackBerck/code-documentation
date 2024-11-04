<?php
include 'connection.php';

$query = "SELECT pembeli.id AS id_pembeli, barang.id AS id_barang, kurir.id AS id_kurir 
              FROM pembeli, barang, kurir";
$result = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COD Barang</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>ID Pembeli</th>
                <th>ID Kurir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($id_data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?= $id_data['id_barang']; ?></td>
                    <td><?= $id_data['id_pembeli']; ?></td>
                    <td><?= $id_data['id_kurir']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>