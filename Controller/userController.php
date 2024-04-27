<?php
require_once("../Helper/connection.php");

class userController {
    public function insert($username, $email, $password){
        global $conn;
                
        $sql = $conn->prepare("INSERT INTO tbl_users (username, email, password) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $username, $email, $password);
        
        if($sql->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password) {
        global $conn;
    
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
    
        $sql = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}

?>