<?php
include('connection.php');

$query = "SELECT * FROM posts";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Read</title>
</head>
<body>
<h1>Post News Ter-Update!</h1>
<a href="add_post.php"><button>Tambah data</button></a>
    <?php
    $no = 1;
    while($post_data = mysqli_fetch_array($result)){
        ?>
        <div>
            <h2><?= $post_data["id"]; ?>. <?= $post_data["title"] ?></h2>
            <p><a href="update_post.php">Edit</a> | <a href="delete_post.php">Delete</a></p>
            <p><?= $post_data["content"] ?></p>
        </div>
        <?php
    }
    ?>
</body>
