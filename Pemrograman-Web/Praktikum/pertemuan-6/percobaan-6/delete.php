<?php
session_start();
include "koneksi.php";

$id = $_GET["id"];
$result = mysqli_query($koneksi, "DELETE FROM pengguna WHERE id=$id");

header("location:index.php");
