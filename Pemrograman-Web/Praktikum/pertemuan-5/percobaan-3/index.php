<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan 3 - Include</title>
</head>

<body>
    <div class="menu">
        <?php
        include 'menu.php';
        ?>
    </div>
    <h1>Ini adalah judul</h1>
    <p>Ini adalah pembukaan</p>
    <p>Ini adalah isi</p>
    <?php
    include 'footer.php';
    ?>
</body>

</html>