<?php
require './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $price = $row['price'];
    } else {
        echo "Produk tidak ditemukan.";
        exit;
    }
} else {
    echo "Permintaan tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?=$id;?>">
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" value="<?=$name;?>" required>
        <label for="price">Harga:</label>
        <input type="text" name="price" value="<?=$price;?>" required>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
