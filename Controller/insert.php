<?php
require_once 'RestoranController.php';

$RestoranController = new RestoranController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $Kode_Transaksi = $_POST["Kode_Transaksi"];
    $No_Telepon = $_POST["No_Telepon"];
    $Nama_Makanan = $_POST["Nama_Makanan"];
    $Total_Harga = $_POST["Total_Harga"];
    $Tanggal_Beli = $_POST["Tanggal_Beli"];
    // $Bukti = $_FILES["Bukti"];
    $Bukti = $_FILES['Bukti']['name'];
    $Bukti_tmp = $_FILES['Bukti']['tmp_name'];
    move_uploaded_file($Bukti_tmp, './uploads/' . $Bukti);


    echo($Bukti_tmp);

    $RestoranController->insert($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Bukti);

    header("Location: http://localhost/tugas2/Pages/Dashboard.php");
}
?>
