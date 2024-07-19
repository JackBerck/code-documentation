<?php
require "functions.php";

$id = $_GET["id"];
// cek data berhasil dihapus
if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
