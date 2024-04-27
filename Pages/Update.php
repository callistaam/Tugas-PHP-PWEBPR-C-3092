<?php
require_once("../Controller/RestoranController.php");
require_once("../Helper/connection.php");

$controller = new RestoranController($conn);
$rows = $controller->detail();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Update.css">
    <title>3092-pwebpr4</title>
</head>

<body>
<div class="sidebar">
        <div class="resto">BITES</div>
        <div class="sidebar-box">
            <a href="Dashboard.php">
                <img src="dashboard.png" alt="" class="dashboard">
            </a>
            <a href="Menu.php">
                <img src="menu.png" alt="" class="menu">
            </a>
        </div>
    </div>   
    
    <div class="box1">
        <h1>Edit Data</h1>
        <div class="search-box"> Search
            <img src="search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="notif.png" alt="" class="notif">
        <img src="profil.png" alt="" class="profil">
    </div>

    <div class="box2">
        <div class="box4">
        <?php foreach ($rows as $row) { ?>
            <form action="/tugas2/Controller/Update.php" method="POST">
                <input value="<?= $row['Kode_Transaksi'] ?>" type="hidden" id="Kode_Transaksi" name="Kode_Transaksi">

                <label for="No_Telepon">No. Telepon</label><br>
                <input value="<?= $row['No_Telepon'] ?>" type="text" id="No_Telepon" name="No_Telepon" required><br><br>

                <label for="Nama_Makanan">Nama Kasir</label><br>
                <input value="<?= $row['Nama_Makanan'] ?>" type="text" id="Nama_Makanan" name="Nama_Makanan" required><br><br>

                <label for="Total_Harga">Total Harga</label><br>
                <input value="<?= $row['Total_Harga'] ?>" type="text" id="Total_Harga" name="Total_Harga" required><br><br>

                <label for="Tanggal_Beli">Tanggal Beli</label><br>
                <input value="<?= $row['Tanggal_Beli'] ?>" type="date" id="Tanggal_Beli" name="Tanggal_Beli" required><br><br>

                <button type="submit">Update</button>
            </form>
        <?php } ?>
        </div>
    </div>
</body>
</html>