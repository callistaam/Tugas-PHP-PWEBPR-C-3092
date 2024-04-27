<?php
require_once("../Controller/RestoranController.php");
require_once("../Helper/connection.php");
session_start();

if (isset($_COOKIE['insert'])) {
    $Kode_Transaksi = $_POST["Kode_Transaksi"];
    $No_Telepon = $_POST["No_Telepon"];
    $Nama_Makanan = $_POST["Nama_Makanan"];
    $Total_Harga = $_POST["Total_Harga"];
    $Tanggal_Beli = $_POST["Tanggal_Beli"];
    // $Bukti = $_FILES["Bukti"];
    
        $Bukti = $_FILES['Bukti']['name'];
        $Bukti_tmp = $_FILES['Bukti']['tmp_name'];
        move_uploaded_file($file_tmp, './uploads/' . $Bukti);

        $query = "INSERT INTO crud_tugas5 (Kode_Transaksi, No_Telepon, Nama_Makanan, Total_Harga, Tanggal_Beli, Bukti) VALUES (?, ?, ?, ?, ?, ?)";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            $_SESSION['message'] = "Data berhasil ditambahkan";
            header("Location: Dashboard.php");
        } else {
            $_SESSION['Gagal menambahkan data'];
            header("Location: Insert.php");
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Insert.css">
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
        <h1>Insert Data</h1>
        <div class="search-box"> Search
            <img src="search.png" alt="Search Icon" class="search-icon">
        </div>
        <img src="notif.png" alt="" class="notif">
        <img src="profil.png" alt="" class="profil">
    </div>

    <div class="box2">
    <h2>Tambah Data</h2>
        <form method="POST" action="/tugas2/Controller/insert.php" enctype="multipart/form-data">
        <div class="box4">
            <input type="hidden" id="kode_transaksi" name="Kode_Transaksi" value="Auto Generated" disabled>

            <label for="no_telepon">No. Telepon</label><br>
            <input type="text" id="no_telepon" name="No_Telepon" required><br><br>

            <label for="Nama_Makanan">Nama Makanan</label><br>
            <input type="text" id="Nama_Makanan" name="Nama_Makanan" required><br><br>

            <label for="total_harga">Total Harga</label><br>
            <input type="number" id="total_harga" name="Total_Harga" required><br><br>

            <label for="tanggal_beli">Tanggal Beli</label><br>
            <input type="date" id="tanggal_beli" name="Tanggal_Beli" required><br><br>

            <label for="Bukti">Bukti Transaksi</label><br>
            <input type="file" id="Bukti" name="Bukti" required><br><br>

            <button type="submit">Tambah</button>
        </div>
    </form>
</div>
</body>
</html>