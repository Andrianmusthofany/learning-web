<?php
require './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus produk.";
        exit;
    }
} else {
    echo "Permintaan tidak valid.";
    exit;
}
?>
