<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <?php
    $mahasiswa = [
        ["nama" => "Romi", "asal" => "Bogor", "umur" => "22"],
        ["nama" => "Anto", "asal" => "Depok", "umur" => "23"],
        ["nama" => "Putri", "asal" => "Bangka", "umur" => "21"]
    ];

    foreach ($mahasiswa as $mhs) {
        echo $mhs["nama"] . "<br>";
        echo "Asal: " . $mhs["asal"] . "<br>";
        echo "Umur: " . $mhs["umur"] . "<br>";
        echo "<br>";
    }
    ?>
</body>

</html>