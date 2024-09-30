<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Angka pertama" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Angka kedua" required>
        <button type="submit" name="submit" value="calculate">Hitung</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Tidak bisa membagi dengan nol!";
                    exit;
                }
                break;
            default:
                echo "Operasi tidak valid!";
                exit;
        }

        echo "<h2>Hasil: $result</h2>";
    }
    ?>
</body>

</html>