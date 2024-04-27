<?php
require_once("../Helper/connection.php");

class RestoranController {
    public function select(){
        global $conn;

        $sql = "SELECT * FROM `crud_tugas5`";
        $result= $conn->query($sql);
        $rows = [];
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    // public function insert($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli){
    //     global $conn;
                
    //     $sql = $conn->prepare("INSERT INTO crud_tugas5 (Kode_Transaksi, No_Telepon, Nama_Makanan, Total_Harga, Tanggal_Beli) VALUES (?, ?, ?, ?, ?)");
    //     $sql->bind_param("issss", $Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli);
        
    //     if($sql->execute()){
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function insert($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Bukti){
        global $conn;
                    
        $sql = $conn->prepare("INSERT INTO crud_tugas5 (Kode_Transaksi, No_Telepon, Nama_Makanan, Total_Harga, Tanggal_Beli, Bukti) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("isssss", $Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Bukti);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }    

    public function detail(){
        global $conn;

        $id = $_GET['id'];
        if(isset($id)){
            $sql = "SELECT * FROM crud_tugas5 WHERE Kode_Transaksi=$id";
            $result= $conn->query($sql);
            $rows = [];
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
            }
            return $rows;
        }
    }

    public function update($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli){
        global $conn;
        $sql = $conn->prepare("UPDATE crud_tugas5 set No_Telepon=?, Nama_Makanan=?, Total_Harga=?, Tanggal_Beli=? WHERE Kode_Transaksi=?");
        
        $sql->bind_param("ssssi", $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Kode_Transaksi);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }
    
    public function delete($id){
        global $conn;

        $sql = $conn->prepare("DELETE FROM crud_tugas5 WHERE Kode_Transaksi = ?");
        $sql->bind_param("i", $id);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }
}
?>