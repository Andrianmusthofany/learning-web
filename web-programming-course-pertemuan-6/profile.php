<?php 

session_start();
if ($_SESSION['role'] ≠ 'user'){
    session_destroy();
    header('location: index.php '); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang admin <?php echo $_SESSION['name'];?></h1>
    <a href="./backend/Logout">Logout</a>
</body>
</html>