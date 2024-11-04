<?php

include "../connection.php";

$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

header('Location: index.php');