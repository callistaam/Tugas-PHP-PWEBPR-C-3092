<?php
require_once("../Controller/RestoranController.php");
require_once("../Helper/connection.php");

$controller = new RestoranController($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.css">
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
        <h1>Dashboard</h1>
        <div class="search-box"> Search
            <img src="search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="notif.png" alt="" class="notif">
        <img src="profil.png" alt="" class="profil">
    </div>
    
    <div class="box4">
        <div class="box3">
            <a href="Insert.php"> 
                <button class="btn-tambah">Tambah</button>
            </a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>No. Telepon</th>
                    <th>Nama Makanan</th>
                    <th>Total Harga</th>
                    <th>Tanggal Beli</th>
                    <th>Bukti Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <?php foreach ($controller->select() as $key => $row) { ?>
                <form class="form" action="insert.php" method="POST" enctype="multipart/form-data"></form>
                <tr>
                    <td><?= $row['Kode_Transaksi'] ?></td>
                    <td><?= $row['No_Telepon'] ?></td>
                    <td><?= $row['Nama_Makanan'] ?></td>
                    <td><?= $row['Total_Harga'] ?></td>
                    <td><?= $row['Tanggal_Beli'] ?></td>
                    <td><img style="width: 100px" src="../Controller/uploads/<?= $row['Bukti']; ?>"></td>
                    
                    <td class="grp-btn">
                        <a href="Update.php?id=<?= $row['Kode_Transaksi'] ?>">
                            <button class="btn-edit">Edit</button>
                        </a>

                        <a href="/tugas2/Controller/Delete.php?Kode_Transaksi=<?= $row['Kode_Transaksi'] ?>">
                            <button class="btn-hapus">Hapus</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>