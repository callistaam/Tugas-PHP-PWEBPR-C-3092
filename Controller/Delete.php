<?php
require_once 'RestoranController.php';

$RestoranController = new RestoranController();
{
    $Kode_Transaksi = $_GET["Kode_Transaksi"];
    
    if ($RestoranController->delete($Kode_Transaksi)) {
        header("Location: http://localhost/tugas2/Pages/Dashboard.php");
    } else {
        echo "Gagal menghapus entri.";
    }
}
?>