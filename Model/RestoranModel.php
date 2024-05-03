<?php
require_once("Helper/database.php");
require_once("Helper/env.php");

// class UserController {
//     static function insert($username, $email, $password){
//         global $conn;
//         $sql = $conn->prepare("INSERT INTO tbl_users (username, email, password) VALUES (?, ?, ?)");
//         $sql->bind_param("sss", $username, $email, $password);
        
//         if($sql->execute()){
//             return true;
//         } else {
//             return false;
//         }
//     }

//     static function login($email, $password) {
//         global $conn;
    
//         $email = mysqli_real_escape_string($conn, $email);
//         $password = mysqli_real_escape_string($conn, $password);
    
//         $sql = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'";
//         $result = $conn->query($sql);
    
//         if ($result->num_rows == 1) {
//             return $result->fetch_assoc();
//         } else {
//             return null;
//         }
//     }
// }

class RestoranModel {
    static function select(){
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
    
    static function insert($No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Bukti){
        global $conn;
                    
        $sql = $conn->prepare("INSERT INTO crud_tugas5 (No_Telepon, Nama_Makanan, Total_Harga, Tanggal_Beli, Bukti) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("ssiss", $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Bukti);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }

    static function detail($id){
        global $conn;

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

    static function update($Kode_Transaksi, $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli){
        global $conn;
        $sql = $conn->prepare("UPDATE crud_tugas5 set No_Telepon=?, Nama_Makanan=?, Total_Harga=?, Tanggal_Beli=? WHERE Kode_Transaksi=?");
        
        $sql->bind_param("ssisi", $No_Telepon, $Nama_Makanan, $Total_Harga, $Tanggal_Beli, $Kode_Transaksi);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }
    
    static function delete($id){
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
