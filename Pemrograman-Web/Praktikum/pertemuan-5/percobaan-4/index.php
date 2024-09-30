<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan 4 - Functions & Statements</title>
</head>

<body>
    <?php
    function text()
    {
        echo "Hello World!<br><br>";
    }

    function olahraga($sport)
    {
        echo "Saya bermain " . $sport . "<br>";
    }

    olahraga("Sepak Bola");
    olahraga("Basket");
    olahraga("Voli");
    olahraga("Badminton");
    olahraga("Golf<br/>");

    function penjumlahan($a, $b)
    {
        return $a + $b;
    }

    echo penjumlahan(5, 2) . "<br>";

    function tambah_dua($value)
    {
        $value += 2;
    }

    $num = 4;

    tambah_dua($num);
    echo $num . "<br><br>";

    function lahir($bulanKelahiran)
    {
        switch ($bulanKelahiran) {
            case "Januari":
                echo "Anda lahir di bulan Januari";
                break;
            case "Februari":
                echo "Anda lahir di bulan Februari";
                break;
            case "Maret":
                echo "Anda lahir di bulan Maret";
                break;
            default:
                echo "Bulan kelahiran Anda bukan Januari, Februari, atau Maret";
                break;
        }
    }

    $bulan = "November";
    echo lahir($bulan);
    ?>
</body>

</html>