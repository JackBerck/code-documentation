<?php
include('connection.php');

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create/Add</title>
</head>
<body>
<h2>Tambah Post Berita!</h2>
<form action="add_post.php" method="POST">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Konten</td>
            <td><textarea name="content" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>
</html>
