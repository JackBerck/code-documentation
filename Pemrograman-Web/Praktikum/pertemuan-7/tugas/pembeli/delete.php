<?php

include "../connection.php";

$id = $_GET['id'];

$query = "DELETE FROM pembeli WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

header('Location: index.php');