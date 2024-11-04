<?php
session_start();
include('connection.php');

$id = $_GET['id'];
$query = "DELETE FROM pengguna WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

header('Location: index.php');
?>


