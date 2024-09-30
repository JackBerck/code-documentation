<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan 2 - Array</title>
</head>

<body>
    <?php
    $nama = array("Red", "Green", "Blue");
    echo "I like " . $nama[0] . ", " . $nama[1] . " and " . $nama[2] . "<br>";
    echo count($nama) . "<br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.<br>";

    $mahasiswa = array(
        array("Romi", "Bogor", "22"),
        array("Budi", "Depok", "23"),
        array("Anton", "Jakarta", "22"),
        array("Putri", "Bekasi", "21")
    );

    echo $mahasiswa[0][0] . " berasal dari " . $mahasiswa[0][1] . " dan berumur " . $mahasiswa[0][2] . " tahun.<br>";
    echo $mahasiswa[1][0] . " berasal dari " . $mahasiswa[1][1] . " dan berumur " . $mahasiswa[1][2] . " tahun.<br>";
    echo $mahasiswa[2][0] . " berasal dari " . $mahasiswa[2][1] . " dan berumur " . $mahasiswa[2][2] . " tahun.<br>";
    echo $mahasiswa[3][0] . " berasal dari " . $mahasiswa[3][1] . " dan berumur " . $mahasiswa[3][2] . " tahun.<br>";

    ?>
</body>

</html>