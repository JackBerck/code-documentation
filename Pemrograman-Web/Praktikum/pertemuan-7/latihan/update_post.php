<?php
include('koneksi.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE posts SET title = '$title', content = '$content' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$post_data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2>Edit Post Berita!</h2>
<a href="index.php"><button>Kembali</button></a>
<form action="update_post.php" method="POST">
    <input type="hidden" name="id" value="<?= $post_data['id']; ?>">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="title" value="<?= $post_data['title']; ?>"></td>
        </tr>
        <tr>
            <td>Konten</td>
            <td><textarea name="content" cols="30" rows="10"><?= $post_data['content']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>