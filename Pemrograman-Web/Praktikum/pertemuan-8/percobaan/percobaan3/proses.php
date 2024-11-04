<?php

session_start();
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];

$_SESSION['nama'] = $nama;
$_SESSION['umur'] = $umur;
$_SESSION['email'] = $email;

header('Location: home.php');