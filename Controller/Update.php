<!-- <?php
require_once 'RestoranModel.php';

$RestoranModel = new RestoranModel();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Kode_Transaksi = $_POST["Kode_Transaksi"];
    $No_Telepon = $_POST["No_Telepon"];
    $Nama_Makanan = $_POST["Nama_Makanan"];
    $Total_Harga = $_POST["Total_Harga"];
    $Tanggal_Beli = $_POST["Tanggal_Beli"];

    $RestoranModel->update($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli);

    header("Location: http://localhost/tugas2/Pages/Dashboard.php");
}

else {
    include 'Update.php';
}

?> -->


<?php
require_once "Model/RestoranModel.php";
require_once "Function/function.php";

class RestoranController {
    public function update($id) {
        global $url;

        // Pastikan parameter Kode_Transaksi disertakan dalam pemanggilan update
        $data = RestoranModel::update($id, $_POST["No_Telepon"], $_POST["Nama_Makanan"], $_POST["Total_Harga"], $_POST["Tanggal_Beli"]);

        // Pindahkan file jika ada yang diunggah
        if(isset($_FILES['Bukti']) && $_FILES['Bukti']['size'] > 0) {
            $Bukti_tmp = $_FILES['Bukti']['tmp_name'];
            move_uploaded_file($Bukti_tmp, './uploads/' . $_FILES['Bukti']['name']);
        }

        header("Location:".$url."/Dashboard");
    }
}
?>
