<?php
require_once 'RestoranController.php';

$RestoranController = new RestoranController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Kode_Transaksi = $_POST["Kode_Transaksi"];
    $No_Telepon = $_POST["No_Telepon"];
    $Nama_Makanan = $_POST["Nama_Makanan"];
    $Total_Harga = $_POST["Total_Harga"];
    $Tanggal_Beli = $_POST["Tanggal_Beli"];

    $RestoranController->update($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli);

    header("Location: http://localhost/tugas2/Pages/Dashboard.php");
}

else {
    include 'Update.php';
}

?>