<!-- <?php
require_once 'RestoranModel.php';

$RestoranModel = new RestoranModel();
{
    $Kode_Transaksi = $_GET["Kode_Transaksi"];
    
    if ($RestoranModel->delete($Kode_Transaksi)) {
        header("Location: http://localhost/tugas2/Pages/Dashboard.php");
    } else {
        echo "Gagal menghapus entri.";
    }
}
?> -->