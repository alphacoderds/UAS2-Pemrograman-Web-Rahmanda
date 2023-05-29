<?php
include_once("config.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: phpcrud/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="animasi">
    <br>
    <?php echo "<h1>Halo " . $_SESSION['username'] . "</h1>"; ?>
</div>
<br>
<div class="animasi">
    <br><h1>.....SELAMAT DATANG DI KOMUNITAS WOMEN IN TECH..... --> </h1></div>
</div>
<div class="animasi">
    <a href="phpcrud/index.php"><h2>Klik Input or<h2></a>
    <br>
    <a href="logout.php">Klik Logout</a>
</div>
</body>
</html>
