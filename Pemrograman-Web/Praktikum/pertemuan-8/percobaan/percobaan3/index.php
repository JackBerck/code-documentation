<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 3</title>
</head>
<body>
    <h1>Masukkan data kalian</h1>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>