<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data["judul"]; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/bootstrap.min.css">
</head>
<nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= BASE_URL ?>home/">Home</a>
            <a class="nav-item nav-link" href="<?= BASE_URL ?>about/">About</a>
            <a class="nav-item nav-link" href="<?= BASE_URL ?>mahasiswa/">Mahasiswa</a>
        </div>
    </div>
</nav>

<body>