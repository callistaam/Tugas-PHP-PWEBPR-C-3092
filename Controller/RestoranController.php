<?php
require_once "Model/RestoranModel.php";
require_once "Function/function.php";

class RestoranController {
    public function index() {
        $data = RestoranModel::select();
        loadView('Dashboard', $data);
    }

    public function formcreate() {
        loadView('Insert');
    }

    public function create() {
        global $url;

        $data = RestoranModel::insert($_POST["No_Telepon"], $_POST["Nama_Makanan"], $_POST["Total_Harga"], $_POST["Tanggal_Beli"], $_FILES['Bukti']['name']);
        
        $Bukti_tmp = $_FILES['Bukti']['tmp_name'];
        move_uploaded_file($Bukti_tmp, 'Controller/uploads/' . $_FILES['Bukti']['name']);
        
        header("Location:/tugas2");
    }

    public function detail($id){
        $data = RestoranModel::detail($id);
        return $data;
    }

    public function formupdate($id){
        // die($id);
        $data = RestoranModel::detail($id);
        loadView('Update', $data);
    }

    public function update($id){
        global $url;
        $id = $_POST['Kode_Transaksi'];

        $data = RestoranModel::update($id,$_POST["No_Telepon"],$_POST["Nama_Makanan"],$_POST["Total_Harga"],$_POST["Tanggal_Beli"]);

        header("Location:/tugas2");
    }

    public function delete($id) {
        global $url;
        $data = RestoranModel::delete($id);
        header("Location:".$url."/Dashboard");
    }
}